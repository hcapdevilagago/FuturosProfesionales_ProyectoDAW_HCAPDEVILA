$(document).ready(function () {
    $('#reg_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Por favor, introduzca su nombre completo.'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, introduzca su número de teléfono'
                    },
                    phone: {
                        country: 'US',
                        message: 'Por favor, introduzca un número de teléfono válido'
                    }
                }
            },
            address: {
                validators: {
                    stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Por favor, introduzca su dirección física'
                    }
                }
            },
            city: {
                validators: {
                    stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Por favor, introduzca su ciudad'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, introduzca su país'
                    }
                }
            },

            comment: {
                validators: {
                    stringLength: {
                        min: 10,
                        max: 1000,
                        message: 'Por favor, introduzca al menos 10 carácteres y un máximo de 1000'
                    },
                    notEmpty: {
                        message: 'Por favor, este campo es obligatorio'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, introduzca su email'
                    },
                    emailAddress: {
                        message: 'Por favor, introduzca un correo electrónico válido'
                    }
                }
            },

            password: {
                validators: {
                    identical: {
                        field: 'confirmPassword',
                        message: 'Es necesario que confirme la contraseña'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'Ambas contraseñas no coinciden, inténtelo de nuevo'
                    }
                }
            },

        }
    }).on('success.form.bv', function (e) {
        $('#success_message').slideDown({opacity: "show"}, "slow")
        $('#reg_form').data('bootstrapValidator').resetForm();
        e.preventDefault();
        var $form = $(e.target);
        var bv = $form.data('bootstrapValidator');
        $.post($form.attr('action'), $form.serialize(), function (result) {
            console.log(result);
        }, 'json');
    });
});