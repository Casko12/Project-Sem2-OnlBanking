/*
05-01-2017
Author - Anshul Kumar
Plugin to validate the pin entered by a DigitRx user. The pin is broken down into 4 individual numbers and the user enters 1 number in each input box. The data entry is automated as in the user is automatically taken to the next input box once he has entered something in the current input. Backspace and arrow keys work as well. Callback functionalities have also been provided in the plugin.

This plugin checks if all four input boxes have been filled, and then concatenates the data in all the input boxes. Once all four input boxes are filled, we can use callback functionalities present in the plugin to make an AJAX call to the database to check if the pin matches or not.


============Basic Initialization============
Wrap your html in a wrapper and pass the wrapper's class or ID in the plugin call. Let's assume our wrapper has the class 'pin-wrapper'

$('.pin-wrapper').validatePin();


============Options============
1) numericKeyboardOnMobile - If set true, it will prompt mobile devices to open numeric keyboard

    $('.pin-wrapper').validatePin({
        numericKeyboardOnMobile: true,
    });

2) blurOnSuccess - If set true, it will remove focus from the input fields on success

    $('.pin-wrapper').validatePin({
            blurOnSuccess: true,
    });


============Callback functions============
This plugin's purpose is to validate the pin entered by the user and return if the operation was successful or a failure(if all the 4 input boxes have been filled or not).
Checking the pin by ajax and showing appropriate responses is out of the scope of the plugin and need to be written separately
Two callback functions are provided - onSuccess and onFailure

    $('.pin-wrapper').validatePin({
        onSuccess: function () {
            --success code goes here--
        },
        onFailure: function () {
            --failure code goes here--
        }
    });

*/

(function($) {
    //Declare our function
    $.fn.validatePin = function(options) {
        var defaults = {
            //Default Settings
            numericKeyboardOnMobile: false,
            blurOnSuccess: false,

            //Declaring our callback functions
            onSuccess: function() {},
            onFailure: function() {}
        };

        var settings = $.extend({}, defaults, options);

        //Cache the DOM into a jquery object so that repetitive scanning of DOM won't be necessary
        var $wrapper = $(this),
            $el = $wrapper.find('[data-role="pin"]'),
            $elCount = $wrapper.find('[data-role="pin"]').length;
        pin = "";

        $el.each(function() {
            pin += ".";
        });

        //Event Initializations
        bindEvents();

        //Function Declarations
        function bindEvents() {
            $($el).on("focus", function() {
                selectText(this);
            });

            if (checkForMobileDevices()) {
                $($el).on("keyup", function(e) {
                    var $that = this;
                    validateUserInput(e, $that, "keypress");
                });
            } else {
                $($el).on("keypress", function(e) {
                    var $that = this;
                    setTimeout(function() {
                        validateUserInput(e, $that, "keypress");
                    }, 0);
                });
            }
            $($el).on("keydown", function(e) {
                var $that = this;
                setTimeout(function() {
                    validateUserInput(e, $that, "keydown");
                }, 0);
            });
        }

        //Select the text in an input field
        function selectText(obj) {
            var value = $(obj).val();
            if (!checkForMobileDevices() && $.trim(value) != "") {
                $(obj).select();
            }
        }

        //Validate User Input
        function validateUserInput(e, obj, event) {
            var keycode = e.charCode || e.keyCode || e.which;
            var prevInput = $(obj).prev('[data-role="pin"]'),
                nextInput = $(obj).next('[data-role="pin"]'),
                index = $(obj).index(),
                value = $(obj).val(),
                empty;

            if (event == "keydown") {
                //Case - User Hits Left Arrow
                if (keycode === 37) {
                    $(prevInput).focus();
                    selectText(prevInput);
                } else if (keycode === 39) {
                    //Case - User Hits Right Arrow
                    $(nextInput).focus();
                    selectText(nextInput);
                }

                if ($.trim(value) == "") {
                    if (keycode === 8) {
                        $(prevInput).focus();
                        settings.onFailure.call(this);
                    }
                } else {
                    return false;
                }
            }

            if (event == "keypress") {
                if (keycode == 0) {
                    return false;
                }

                //Case - User Enters an alphabet or a special character
                if (
                    (keycode >= 65 && keycode <= 90) ||
                    (keycode >= 186 && keycode <= 222)
                ) {
                    e.preventDefault();
                }

                //Case - User enters a number from the main keypad or the numpad
                if (
                    (keycode >= 48 && keycode <= 57) ||
                    (keycode >= 96 && keycode <= 105)
                ) {
                    pin = $.trim(pin.replace(/\s/g, ""));
                    pin = pin.split("");
                    pin[index] = value;
                    pin = pin.join("");

                    $(nextInput).focus();

                    if (!checkForMobileDevices()) {
                        setTimeout(function() {
                            $(obj).val("•");
                        }, 200);
                    } else {
                        $(obj).val("•");
                    }
                }

                var empty = $($el).filter(function() {
                    return this.value === "";
                });

                if (empty.length) {
                    settings.onFailure.call(this);
                } else {
                    settings.onSuccess.call(this);
                    //Check if the user wants to move the focus out of the inputs on success
                    if (settings.blurOnSuccess) {
                        $($el).blur();
                    }
                }
            }

            //Check if default settings have been overrided by the user

            //Prompts a numberic keyboard on mobile
        }

        function checkForMobileDevices() {
            if (
                /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                    navigator.userAgent
                )
            ) {
                return true;
            } else {
                return false;
            }
        }

        if (settings.numericKeyboardOnMobile) {
            if (checkForMobileDevices()) {
                $el.prop("type", "tel");
            }
        }
    };
})(jQuery);

$(document).ready(function() {
    $(".pin-wrapper").validatePin({
        numericKeyboardOnMobile: true,
        blurOnSuccess: true,
        onSuccess: function() {
            $(".pin").html(pin);
        },
        onFailure: function() {
            $(".pin").html("");
        }
    });
});

// ham doc so thanh chu
var DocTienBangChu = function () {
    this.ChuSo = new Array(" không ", " một ", " hai ", " ba ", " bốn ", " năm ", " sáu ", " bảy ", " tám ", " chín ");
    this.Tien = new Array("", " nghìn", " triệu", " tỷ", " nghìn tỷ", " triệu tỷ");
};

DocTienBangChu.prototype.docSo3ChuSo = function (baso) {
    var tram;
    var chuc;
    var donvi;
    var KetQua = "";
    tram = parseInt(baso / 100);
    chuc = parseInt((baso % 100) / 10);
    donvi = baso % 10;
    if (tram == 0 && chuc == 0 && donvi == 0) return "";
    if (tram != 0) {
        KetQua += this.ChuSo[tram] + " trăm ";
        if ((chuc == 0) && (donvi != 0)) KetQua += " linh ";
    }
    if ((chuc != 0) && (chuc != 1)) {
        KetQua += this.ChuSo[chuc] + " mươi";
        if ((chuc == 0) && (donvi != 0)) KetQua = KetQua + " linh ";
    }
    if (chuc == 1) KetQua += " mười ";
    switch (donvi) {
        case 1:
            if ((chuc != 0) && (chuc != 1)) {
                KetQua += " mốt ";
            }
            else {
                KetQua += this.ChuSo[donvi];
            }
            break;
        case 5:
            if (chuc == 0) {
                KetQua += this.ChuSo[donvi];
            }
            else {
                KetQua += " lăm ";
            }
            break;
        default:
            if (donvi != 0) {
                KetQua += this.ChuSo[donvi];
            }
            break;
    }
    return KetQua;
}

DocTienBangChu.prototype.doc = function (SoTien) {
    var lan = 0;
    var i = 0;
    var so = 0;
    var KetQua = "";
    var tmp = "";
    var soAm = false;
    var ViTri = new Array();
    if (SoTien < 0) soAm = true;//return "Số tiền âm !";
    if (SoTien == 0) return "Không đồng";//"Không đồng !";
    if (SoTien > 0) {
        so = SoTien;
    }
    else {
        so = -SoTien;
    }
    if (SoTien > 8999999999999999) {
        //SoTien = 0;
        return "";//"Số quá lớn!";
    }
    ViTri[5] = Math.floor(so / 1000000000000000);
    if (isNaN(ViTri[5]))
        ViTri[5] = "0";
    so = so - parseFloat(ViTri[5].toString()) * 1000000000000000;
    ViTri[4] = Math.floor(so / 1000000000000);
    if (isNaN(ViTri[4]))
        ViTri[4] = "0";
    so = so - parseFloat(ViTri[4].toString()) * 1000000000000;
    ViTri[3] = Math.floor(so / 1000000000);
    if (isNaN(ViTri[3]))
        ViTri[3] = "0";
    so = so - parseFloat(ViTri[3].toString()) * 1000000000;
    ViTri[2] = parseInt(so / 1000000);
    if (isNaN(ViTri[2]))
        ViTri[2] = "0";
    ViTri[1] = parseInt((so % 1000000) / 1000);
    if (isNaN(ViTri[1]))
        ViTri[1] = "0";
    ViTri[0] = parseInt(so % 1000);
    if (isNaN(ViTri[0]))
        ViTri[0] = "0";
    if (ViTri[5] > 0) {
        lan = 5;
    }
    else if (ViTri[4] > 0) {
        lan = 4;
    }
    else if (ViTri[3] > 0) {
        lan = 3;
    }
    else if (ViTri[2] > 0) {
        lan = 2;
    }
    else if (ViTri[1] > 0) {
        lan = 1;
    }
    else {
        lan = 0;
    }
    for (i = lan; i >= 0; i--) {
        tmp = this.docSo3ChuSo(ViTri[i]);
        KetQua += tmp;
        if (ViTri[i] > 0) KetQua += this.Tien[i];
        if ((i > 0) && (tmp.length > 0)) KetQua += '';//',';//&& (!string.IsNullOrEmpty(tmp))
    }
    if (KetQua.substring(KetQua.length - 1) == ',') {
        KetQua = KetQua.substring(0, KetQua.length - 1);
    }
    KetQua = KetQua.substring(1, 2).toUpperCase() + KetQua.substring(2);
    if (soAm) {
        return "Âm " + KetQua + " đồng";//.substring(0, 1);//.toUpperCase();// + KetQua.substring(1);
    }
    else {
        return KetQua + " đồng";//.substring(0, 1);//.toUpperCase();// + KetQua.substring(1);
    }
}
