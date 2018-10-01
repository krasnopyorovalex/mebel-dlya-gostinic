/* ------------------------------------------------------------------------------
*
*  # Steps wizard
*
*  Specific JS code additions for wizard_steps.html page
*
*  Version: 1.1
*  Latest update: Dec 25, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {


    // Wizard examples
    // ------------------------------

    // Basic wizard setup
    var stepBasic = $(".steps-basic");
    stepBasic.steps({
        headerTag: "div.title",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        titleTemplate: '<span class="number">#index#</span> #title#',
        labels: {
            finish: 'Получить примеры работ и стоимость',
            next: 'Следующий шаг',
            previous: 'Вернуться'
        },
        onStepChanging: function (event, currentIndex, newIndex) {

            var input = stepBasic.find(".body:eq(" + currentIndex + ") input.required__field-string");

            if (input.length) {
                if ( input.val().length < 3) {
                    return false;
                }
                formData.setValue(input.attr("name"), input.val(), stepBasic.find("span." + input.attr("name") + "__name"));
            }
            if (currentIndex === 3) {
                var checkedElms = stepBasic.find('input:checkbox:checked').length;
                if (checkedElms === 0) {
                    return false;
                }
            }
            return true;
        },
        onFinishing: function (event, currentIndex) {
            var phone = stepBasic.find(".body:eq(" + currentIndex + ") input.phone").val(),
                email = stepBasic.find(".body:eq(" + currentIndex + ") input.email").val();

            if(phone.length <= 5) {
                return false;
            }
            if(email.length <= 4) {
                return false;
            }
            return true;
        },
        onFinished: function (event, currentIndex) {
            return $.post(stepBasic.attr("action"), stepBasic.serialize(), function (data) {
                return stepBasic.find('.message').text(data.message);
            })
        }
    });

    stepBasic.on('click', '.item__type', function () {
        var _this = $(this),
            closest = _this.closest(".row");
        closest.find(".item__type").removeClass("active");
        closest.find("input[name=type]").attr("type", "hidden");
        formData.setValue('type', _this.attr("data-type"), $("span.type__name"));

        return _this.addClass("active") && closest.find("input[name=type]").val(_this.attr("data-type"));
    });

    stepBasic.on("click", ".another", function () {
        var _this = $(this);

        return _this.closest(".row").find("input[name=type]").attr("type", "text");
    });

    stepBasic.on("click", ".cat__room", function () {
        var _this = $(this);
        _this.toggleClass('checked');
        if(_this.hasClass('checked')) {
            _this.find(".checkbox input").prop('checked', true);
        } else {
            _this.find(".checkbox input").prop('checked', false);
        }

        var checked = [],
            checkboxText = stepBasic.find(".cat__rooms-checked");
        stepBasic.find('input:checkbox:checked').map(function(key, element) {
            return checked.push(element.value);
        });
        return checkboxText.text(checked.join(', '));
    });

    var formData = {
        type: '',
        city: '',
        name: '',
        setValue: function (name, value, span) {
            this[name] = value;
            if(span) {
                span.text(this[name]);
            }
            return true;
        }
    };

});