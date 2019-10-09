jQuery(function ($) {

        $(".check-seguridad").strength({
            templates: {
                toggle: '<span class="input-group-addon"><span class="glyphicon glyphicon-eye-open {toggleClass}"></span></span>'

            },
            scoreLables: {
                empty: 'Vacío',
                invalid: 'Invalido',
                weak: 'Débil',
                good: 'Bueno',
                strong: 'Fuerte'
            },
            scoreClasses: {
                empty: '',
                invalid: 'label-danger',
                weak: 'label-warning',
                good: 'label-info',
                strong: 'label-success'
            },

        });
    });
