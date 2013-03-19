<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false' => 'Cette valeur doit être fausse',
    'This value should be true' => 'Cette valeur doit être vraie',
    'This value should be of type {{ type }}' => 'Cette valeur doit être de type {{ type }}',
    'This value should be blank' => 'Cette valeur doit être vide',
    'The value you selected is not a valid choice' => 'Cette valeur doit être l\'un des choix proposés',
    'You must select at least {{ limit }} choices' => 'Vous devez sélectionner au moins {{ limit }} choix',
    'You must select at most {{ limit }} choices' => 'Vous devez sélectionner au maximum {{ limit }} choix',
    'One or more of the given values is invalid' => 'Une ou plusieurs des valeurs soumises sont invalides',
    'The fields {{ fields }} were not expected' => 'Les champs {{ fields }} n\'ont pas été prévus',
    'The fields {{ fields }} are missing' => 'Les champs {{ fields }} sont manquants',
    'This value is not a valid date' => 'Cette valeur n\'est pas une date valide',
    'This value is not a valid datetime' => 'Cette valeur n\'est pas une date valide',
    'This value is not a valid email address' => 'Cette valeur n\'est pas une adresse email valide',
    'The file could not be found' => 'Le fichier n\'a pas été trouvé',
    'The file is not readable' => 'Le fichier n\'est pas lisible',
    'The file is too large ({{ size }}). Allowed maximum size is {{ limit }}' => 'Le fichier est trop volumineux ({{ size }}). Sa taille ne doit pas dépasser {{ limit }}',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}',
    'This value should be {{ limit }} or less' => 'Cette valeur doit être inférieure ou égale à {{ limit }}',
    'This value is too long. It should have {{ limit }} characters or less' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères',
    'This value should be {{ limit }} or more' => 'Cette valeur doit être supérieure ou égale à {{ limit }}',
    'This value is too short. It should have {{ limit }} characters or more' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères',
    'This value should not be blank' => 'Cette valeur ne doit pas être vide',
    'This value should not be null' => 'Cette valeur ne doit pas être nulle',
    'This value should be null' => 'Cette valeur doit être nulle',
    'This value is not valid' => 'Cette valeur n\'est pas valide',
    'This value is not a valid time' => 'Cette valeur n\'est pas une heure valide',
    'This value is not a valid URL' => 'Cette valeur n\'est pas une URL valide',
    'This form should not contain extra fields' => 'Ce formulaire ne doit pas contenir des champs supplémentaires',
    'The uploaded file was too large. Please try to upload a smaller file' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit',
    'The CSRF token is invalid. Please try to resubmit the form' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire',
    'The two values should be equal' => 'Les deux valeurs doivent être identiques',
    'The file is too large. Allowed maximum size is {{ limit }}' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }}',
    'The file is too large' => 'Le fichier est trop volumineux',
    'The file could not be uploaded' => 'Le téléchargement de ce fichier est impossible',
    'This value should be a valid number' => 'Cette valeur doit être un nombre',
    'This file is not a valid image' => 'Ce fichier n\'est pas une image valide',
    'This is not a valid IP address' => 'Cette adresse IP n\'est pas valide',
    'This value is not a valid language' => 'Cette langue n\'est pas valide',
    'This value is not a valid locale' => 'Ce paramètre régional n\'est pas valide',
    'This value is not a valid country' => 'Ce pays n\'est pas valide',
    'This value is already used' => 'Cette valeur est déjà utilisée',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé',
    'fos_user.username.blank' => 'Entrez un nom d\'utilsateur s\'il vous plaît',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long',
    'fos_user.email.already_used' => 'L\'adresse email est déjà utilisée',
    'fos_user.email.blank' => 'Entrez une adresse email s\'il vous plaît',
    'fos_user.email.short' => 'L\'adresse email est trop courte',
    'fos_user.email.long' => 'L\'adresse email est trop longue',
    'fos_user.email.invalid' => 'L\'adresse email est invalide',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plaît',
    'fos_user.password.short' => 'Le mot de passe est trop court',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plaît',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plaît',
    'fos_user.group.short' => 'Le nom est trop court',
    'fos_user.group.long' => 'Le nom d\'utilisateur est trop long',
  ),
  'FOSUserBundle' => 
  array (
    'fos_user_group_form_name' => 'Nom du groupe : ',
    'fos_user_profile_form_username' => 'Nom d\'utilisateur : ',
    'fos_user_profile_form_email' => 'Adresse e-mail : ',
    'fos_user_profile_form_plainPassword_first' => 'Mot de passe : ',
    'fos_user_profile_form_plainPassword_second' => 'Vérification : ',
    'fos_user_registration_form_username' => 'Nom d\'utilisateur : ',
    'fos_user_registration_form_email' => 'Adresse e-mail : ',
    'fos_user_registration_form_plainPassword_first' => 'Mot de passe : ',
    'fos_user_registration_form_plainPassword_second' => 'Vérification : ',
    'fos_user_resetting_form_new_first' => 'Nouveau mot de passe : ',
    'fos_user_resetting_form_new_second' => 'Vérification : ',
    'fos_user_change_password_form_new_first' => 'Nouveau mot de passe : ',
    'fos_user_change_password_form_new_second' => 'Vérification : ',
    'fos_user_change_password_form_current' => 'Mot de passe actuel : ',
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour',
    'group.flash.created' => 'Le groupe a été créé',
    'group.flash.deleted' => 'Le groupe a été supprimé',
    'security.login.username' => 'Nom d\'utilisateur : ',
    'security.login.password' => 'Mot de passe : ',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour',
    'change_password.submit' => 'Valider',
    'change_password.flash.success' => 'Le mot de passe a été modifié',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Veuillez suivre les instructions qui vous y sont indiquées.',
    'registration.confirmed' => 'Félicitations %username%, votre compte MakinMind est maintenant activé. Nous espérons pouvoir vous compter parmis nos membres fidèles ! N\'hésitez pas à consulter l\'aide en ligne pour comprendre le fonctionnement de base du site et des outils proposés.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Enregistrer',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'resetting.password_already_requested' => 'Un nouveau mot de passe a déjà été demandé pour cet utilisateur dans les dernières 24 heures.',
    'resetting.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Veuillez suivre les instructions qui vous y sont indiquées.',
    'resetting.request.invalid_username' => 'Le nom d\'utilisateur ou l\'adresse e-mail "%username%" n\'existe pas.',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail :',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès',
    'resetting.email.subject' => 'Bienvenue %username% !',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Enregistrer',
    'layout.logged_in_as' => 'Bienvenue %username%',
    'fos_user_profile_form_user_job' => 'Intitulé de votre travail actuel : ',
    'fos_user_profile_form_user_company' => 'Nom de l\'entreprise pour laquelle vous travaillez :',
    'fos_user_profile_form_user_workSocialURL' => 'URL de votre profil professionnel en ligne (Linkedin, Viadeo...) :',
    'fos_user_profile_form_user_facebookURL' => 'URL de votre profil Facebook :',
    'fos_user_profile_form_user_twitterURL' => 'URL de votre profil Twitter :',
    'fos_user_registration_form_firstname' => 'Prénom : ',
    'fos_user_registration_form_lastname' => 'Nom : ',
    'fos_user_profile_form_user_username' => 'Nom d\'utilisateur : ',
    'fos_user_profile_form_user_email' => 'Adresse e-mail : ',
    'fos_user_profile_form_current' => 'Mot de passe : ',
    'fos_user_profile_form_user_firstname' => 'Prénom : ',
    'fos_user_profile_form_user_lastname' => 'Nom : ',
    'fos_user_profile_form_user_phone' => 'N° de téléphone : ',
    'fos_user_profile_form_user_address' => 'Adresse : ',
    'fos_user_profile_form_user_zipcode' => 'Code postal : ',
    'fos_user_profile_form_user_city' => 'Ville : ',
    'fos_user_profile_form_user_country' => 'Pays : ',
    'fos_user_profile_form_user_birthdate' => 'Naissance (jj-mm-aaaa) :',
  ),
  'messages' => 
  array (
    'Symfony2 is great' => 'J\'aime Symfony2',
  ),
));



return $catalogue;
