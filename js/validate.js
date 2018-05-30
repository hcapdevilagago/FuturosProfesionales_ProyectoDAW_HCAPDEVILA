$(document).ready(function () {
    $('#reg_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            usuario: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, introduzca un nombre de usuario'
                    },
                    stringLength: {
                        min: 1,
                        max: 30,
                    }
                }
            },
            contrasena: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, introduzca una contraseña'
                    },
                    stringLength: {
                        min: 8,
                        max: 255,
                        message: 'Por favor, introduzca al menos 8 carácteres y un máximo de 255'
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
            nombre: {
                validators: {
                    stringLength: {
                        min: 2,
                        max: 50,
                    },
                    notEmpty: {
                        message: 'Por favor, introduzca su nombre completo.'
                    }
                }
            },
            dni: {
                validators: {
                    stringLength: {
                        min: 9,
                        max: 9,
                    },
                    notEmpty: {
                        message: 'Por favor, introduzca su nombre completo.'
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
            tel: {
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
            familias: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, seleccione una familia de la lista'
                    }
                }
            },
            ciclos: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, seleccione un ciclo formativo de la lista, antes deberá seleccionar una familia profesional'
                    }
                }
            },
            empresas: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, seleccione una empresa de la lista'
                    }
                }
            },
            tutores: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, seleccione el tutor del ciclo formativo de la lista, antes deberá seleccionar una familia profesional y un ciclo formativo'
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
            }
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