/* Controle formulaire ACCUEIL */

$().ready(function() {

            $.validator.addMethod("nom", function(value, element) {
                return this.optional(element) || /^[a-zA-Z-ç]{5,20}$/i.test(value);
            }, "Votre nom doit comprendre entre 5 et 20 lettres");

            $.validator.addMethod("prenom", function(value, element) {
                return this.optional(element) || /^[a-zA-Z-ç]{5,20}$/i.test(value);
            }, "Votre prénom doit comprendre entre 5 et 20 lettres");

            $.validator.addMethod("age", function(value, element) {
                return this.optional(element) || /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/i.test(value);
            }, "Veuillez rentrer une date de naissance valide");

            $.validator.addMethod("tel", function(value, element) {
                return this.optional(element) || /^0[1-68]([-. ]?[0-9]{2}){4}$/i.test(value);
            }, "Veuillez rentrer un numéro de téléphone valide");
           
            $.validator.addMethod("email", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
            }, "L'adresse e-mail est invalide, veuillez rentrer une adresse valide");

            $.validator.addMethod("password",function(value,element){
                return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/i.test(value);
            },"Le mot de passe doit contenir 8 à 16 caractères, avec une lettre majuscule, des lettres miniscule et au moins 1 chiffre");

            $.validator.addMethod("activity",function(value,element){
                return this.optional(element) || /^[a-zA-Z-ç]{5,20}$/i.test(value);
            },"5 caractères minimum autorisé");

    $("#commentForm").validate({
        debug: true,
        rules: {
            username:{
            required: true,
            minlength: 4
        },
           email: {
            required: true,
            email:true 

        },
        password: {
            required: true,
            minlength:8
           
        },
        confirm_password: {
            required: true,
            minlength:8,
            equalTo:"#password"
        },
     
        agree:"required"
    },
    messages: {

        username:{ 
        required: "Veuillez entrez votre pseudo",
        minlength: "Votre pseudo doit comprendre au moins 4 caractères"

    },
        password:{ 
            required: "Veuillez entrez votre mot de passe",
            minlength: "Votre mot de passe doit comprendre au minimum 8 caractères"

        },
        confirm_password:{ 
            required: "Veuillez confirmer votre mot de passe",
            equalTo:"Veuillez entrez le même mot de passe"
        },
        email:{ 
            required: "Veuillez entrez une adresse email valide",
        },
        agree:"Vous n'avez pas accepté la charte"
    }
    })



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

            pwd_connexion:{ 
                required: "Veuillez entrez votre mot de passe",
                minlength: "Votre mot de passe doit comprendre au moins 5 caractères"
            },
        
            email_co:{ 
                required: "Veuillez entrez une adresse email valide",
                minlength: "Votre mot de passe doit comprendre au moins 5 caractères"
            },
  
        }
    });


/* Controle formulaire PARAMETRES */

    $("#parametreForm").validate({
        rules: {
            nom: {
                required: true,
                nom: true,

            },
            prenom: {
                required: true,
                prenom: true,
                maxlength:3
            },
            age: {
                required: true,
                age: true
            },
            email: {
                required: true,
                minlength: 4,
                email: true
            },
            tel: {
                required: true,
                tel: true
            },
            password:{ 
                required: "Veuillez entrez votre mot de passe",
                minlength: "Votre mot de passe doit comprendre au minimum 8 caractères"
            },
            confirm_password:{ 
                required: "Veuillez confirmer votre mot de passe",
                equalTo:"Veuillez entrez le même mot de passe"
            },
            activity: {
                minlength:5,
                maxlength:20
            }
            
        },
        messages: {
            pwd_connexion:{ 
                required: "Veuillez entrez votre mot de passe",
                minlength: "Votre mot de passe doit comprendre au moins 5 caractères"
            },
   
            email_co:{ 
                required: "Veuillez entrez une adresse email valide",
                minlength: "Votre mot de passe doit comprendre au moins 5 caractères"
            },
  
    },
    });
});
