
//controle pour type de demande
$(function() {
 
    $('#test').click(function() {
        if($('#liste :selected').hasClass('non'))
            console.log('Pas bon');

        else
            console.log('ok');
    });
});



//controle regex(email, tel, message)
$().ready(function() {
                    //probleme avec "name"
            $.validator.addMethod("tata",function(value,element) {
                return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
            }, "Les chiffres ne sont pas autorisé ici tata");
                    //probleme avec "name"

             $.validator.addMethod("first_nom",function(value,element) {
                return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
            }, "Les chiffres ne sont pas autorisé ici");

            $.validator.addMethod("tel",function(value,element){
                return this.optional(element) || /^[0-9+-/]+$/i.test(value);
            },"Le numéro de téléphone est invalide");

             $.validator.addMethod("email", function checkEmail(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/i.test(value);
            }, "L'adresse e-mail est invalide, veuillez rentrer une adresse valide");

            $.validator.addMethod("message",function(value,element){
                return this.optional(element) || /^[^&"()$*€£`=\/;#{}]+$/i.test(value);
            },"le message ne doit pas comporter de charactères spéciaux");

});

//contrôle des entrées "user"
$().ready(function() {
    $("#form_contact").validate({
        rules: {
            tata:{
                tata:true,
                required: true,
                 minlength: 4,
                 maxlength: 20,          
            },
            first_nom:{
                first_nom:true,
                required: true,
                minlength: 4,
                maxlength :20,
            },
            motif_contact:{
                required: true,
            },
            tel:{
                tel:true,
                 required: true,
                 minlength:4,
                 maxlength:12,
            },
            email: {
                required: true,
                email:true, 

            },     
            message: {
                message:true,
                required: true,
                minlength: 4,
                maxlength: 150,
        },   
        
     },
//messages d'erreurs 
    messages: {

        tata:{ 
        required: "Veuillez entrez votre nom",
        minlength: "Votre nom doit comprendre au moins 4 caractères",
        maxlength: "Votre nom doit comprendre au maximun 20 caractères",
        

    },
        first_nom:{ 
        required: "Veuillez entrez votre prénom",
        minlength: "Votre prénom doit comprendre au minimum 4 caractères",
        maxlength: "Votre prénom doit comprendre au maximun 20 caractères",

    },
    motif_contact:{ 
        required: "Veuillez sélectionner 1 type de demande",
    },
    tel:{ 
        required: "Votre numéro de téléphone dépasse les limites",

       
    },
      email:{ 
        required: "Veuillez entrez votre email",
        minlength: "Votre email n'est pas valide",

    },
      message:{ 
        required: "Veuillez entrez votre message",
        minlength: "Votre message doit comprendre au minimun 4 caractères",
         maxlength: "Votre message doit comprendre au maximun 150 caractères",
    },
    agree:"Vous n'avez pas accepté la charte",
    }
    })
 });

$("#connexionForm").validate({
        rules: {
            email_co:{
            required: true,
            minlength: 4,
            email:true
        },
        
        pwd_connexion: {
            required: true,
            minlength:5
           
        },
    },
        messages: {

            email_co:{ 
                required: "Veuillez entrez une adresse email valide",
                minlength: "Votre mot de passe doit comprendre au moins 5 caractères"
            },
            pwd_connexion:{ 
                required: "Veuillez entrez votre mot de passe",
                minlength: "Votre mot de passe doit comprendre au moins 5 caractères"
            },
        
           
  
        }
    });
