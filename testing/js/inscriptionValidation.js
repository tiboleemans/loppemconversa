$('#divLang').on('click', '.btn', function () {
    $('#langInput').val($(this).val());
});

$('#divPeriode').on('click', '.btn', function () {
    $('#periodeInput').val($(this).val());
});

$('#divGender').on('click', '.btn', function () {
    $('#genderInput').val($(this).val());
});
$('#divRelation').on('click', '.btn', function () {
    $('#relationInput').val($(this).val());
});
$('#divTitreProf').on('click', '.btn', function () {
    $('#titreProfInput').val($(this).val());
});
$('#divAmountYears').on('click', '.btn', function () {
    $('#amountYearsInput').val($(this).val());
});
$('#divAmountHours').on('click', '.btn', function () {
    $('#amountHoursInput').val($(this).val());
});
$('#divImmersion').on('click', '.btn', function () {
    $('#immersionInput').val($(this).val());
});
$('#divRapport').on('click', '.btn', function () {
    $('#rapportInput').val($(this).val());
});
$('form').validate({

    rules: {
        langInput: {
            required: true
        }, 
        periodeInput: {
            required: true
        },        
        firstNameStudent: {
            required: true
        },
        lastNameStudent: {
            required: true
        }, 
        birthDateInput: {
            required: true
        },
        genderInput: {
            required: true
        },
        firstNameParent: {
            required: true
        }, 
        lastNameParent: {
            required: true
        }, 
        email: {
            required: true,
            email: true
        },
        relationInput: {
            required: true
        },
        streetParent: {
            required: true
        },
        streetNumParent: {
            required: true
        }, 
        cityParent: {
            required: true
        },
        zipCodeParent: {
            required: true
        },
        gsm: {
            required: true
        },
        telUrgent: {
            required: true
        },
        nameSchool: {
            required: true
        },
        streetSchool: {
            required: true
        },
        streetNumSchool: {
            required: true
        },
        citySchool: {
            required: true
        },
        zipCodeSchool: {
            required: true
        },
        titreProfInput: {
            required: true
        }, 
        nameProf: {
            required: true
        }, 
        amountYearsInput: {
            required: true
        },
        amountHoursInput: {
            required: true
        },
        immersionInput: {
            required: true
        },
        rapportInput: {
            required: true
        },
        accepted : {
            required: true
        }
    },
    messages: {
        langInput: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve de gewenste cursustaal aan te duiden" : "Veuillez indiquer la langue du stage.",
        periodeInput: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve de gewenste periode aan te duiden." : "Veuillez indiquer la période du stage.",        
        firstNameStudent: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve de voornaam van de leerling in te vullen." : "Veuillez remplir le prénom de l'élève.", 
        lastNameStudent: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve de naam van de leerling in te vullen." : "Veuillez remplir le nom de l'élève.", 
        birthDateInput: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve de geboortedatum van de leerling in te vullen." : "Veuillez indiquer la date de naissance de l'élève.",
        genderInput: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve het geslacht van de leerling in te vullen." : "Veuillez remplir le sexe de l'élève.",
        firstNameParent: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve uw voornaam in te vullen." : "Veuillez remplir votre prénom.",
        lastNameParent: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve uw naam in te vullen." : "Veuillez remplir votre prénom.", 
        email: {
            required: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve uw e-mailadres in te vullen." : "Veuillez remplir votre adresse email correctement.",
            email: window.localStorage.getItem("langChoice") == "NL" ? "Uw e-mailadres moet het volgende formaat hebben: name@domain.com" : "Votre addresse email doit avoir prochain format: name@domain.com"
        }, 
        relationInput: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve uw relatie met de leerling aan te duiden." : "Veuillez remplir votre relation avec l'élève.", 
        streetParent: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve uw adres volledig in te vullen." : "Veuillez remplir votre adresse correctement.",
        streetNumParent: window.localStorage.getItem("langChoice") == "NL" ? "Nr." : "Nr.",
        cityParent: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve uw gemeente in te vullen." : "Veuillez remplir votre commune d'habitation.", 
        zipCodeParent: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve uw postcode in te vullen." : "Veuillez remplir votre code postal.",
        gsm: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve uw gsm nummer in te vullen." : "Veuillez remplir votre numéro de téléphone correctement.",
        telUrgent: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve het nummer in geval van nood in te vullen." : "Veuillez remplir le numéro de téléphone en cas d'urgence.",
        nameSchool: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve de naam van de school in te vullen." : "Veuillez remplir le nom de l'école de l'élève.",
        streetSchool: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve de straat van de school in te vullen." : "Veuillez remplir le nom de la rue de l'école de l'élève.",
        streetNumSchool: window.localStorage.getItem("langChoice") == "NL" ? "Nr." : "Nr.",
        citySchool: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve de gemeente van de school in te vullen." : "Veuillez remplir la commune de l'école de l'élève.",
        zipCodeSchool: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve de gemeente van de school in te vullen." : "Veuillez remplir la commune de l'école de l'élève.",
        titreProfInput: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve de aanspreektitel van de leerkracht in te vullen." : "Veuillez indiquer le titre du professeur.",
        nameProf: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve de naam van de leerkracht in te vullen." : "Veuillez remplir le nom du professeur.",
        amountYearsInput: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve het aantal jaren van de gekozen taal op school aan te duiden." : "Veuillez indiquer le nombre d'années de la langue choisie à l'école.",
        amountHoursInput: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve het aantal uren per week van de gekozen taal op school aan te duiden" : "Veuillez indiquer le nombre d'heures de cours de la langue choisie à l'école.",
        immersionInput: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve aan te duiden of de leerling immersie volgt." : "Veuillez indiquer si l'élève est en immersion.",
        rapportInput: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve aan te duiden of u een rapport wenst op te sturen naar de school na de stage." : "Veuillez indiquer si vous désirez qu'un bulletin sera envoyé vers l'école après le stage.",        
        /*contact: window.localStorage.getItem("langChoice") == "NL" ? "Gelieve aan te duiden via welke weg u in contact bent gekomen met Loppem Conversa." : "Veuillez indiquer par quelle voie vous êtes venu en contact avec Loppem Conversa.",*/
        accepted: window.localStorage.getItem("langChoice") == "NL" ? "" : "Veuillez lire et accepter le règlement"
    },
    highlight: function(element) {
        var id_attr = "#" + $( element ).attr("id") + "1";
        $(element).closest('.rowElement').removeClass('has-success').addClass('has-error');
        $(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');         
    },
    unhighlight: function(element) {
        var id_attr = "#" + $( element ).attr("id") + "1";
        $(element).closest('.rowElement').removeClass('has-error').addClass('has-success');
        $(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');         
    },
    errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.length) {
                error.insertAfter(element);
            } else {
            error.insertAfter(element);
            }
        } 
 });