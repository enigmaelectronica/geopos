<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Spanish language by EnigmaTeam
 */
 
/* Mensajes de correo electrónico */

// Account verification
$lang['aauth_email_verification_subject'] = 'Verificación de la cuenta';
$lang['aauth_email_verification_code'] = 'Su código de verificación es: ';
$lang['aauth_email_verification_text'] = " También puede hacer clic en (o copiar y pegar) el siguiente enlace:\n\n";

//Restablecimiento de contraseña
$lang['aauth_email_reset_subject'] = 'Restablecer la contraseña';
$lang['aauth_email_reset_text'] = "Para restablecer su contraseña, haga clic en (o copie y pegue en la barra de direcciones de su navegador) el siguiente enlace:\n\n";

// Restablecimiento de contraseña exitoso
$lang['aauth_email_reset_success_subject'] = 'Restablecimiento de contraseña exitoso';
$lang['aauth_email_reset_success_new_password'] = 'Su contraseña ha sido restablecida exitosamente. Tu nueva contraseña es: ';


/* Error de mensajes */

// Errores de creación de cuenta
$lang['aauth_error_email_exists'] = 'La dirección de correo electrónico ya existe en el sistema. Si olvidó su contraseña, puede hacer clic en el enlace a continuación.';
$lang['aauth_error_username_exists'] = "La cuenta ya existe en el sistema con ese nombre de usuario. Ingrese un nombre de usuario diferente, o si olvidó su contraseña, haga clic en el enlace a continuación.";
$lang['aauth_error_email_invalid'] = 'Dirección de correo electrónico no válida';
$lang['aauth_error_password_invalid'] = 'Contraseña invalida';
$lang['aauth_error_username_invalid'] = 'Nombre de usuario no válido';
$lang['aauth_error_username_required'] = 'Nombre de usuario (requerido)';
$lang['aauth_error_totp_code_required'] = 'Se requiere un código de autenticación';
$lang['aauth_error_totp_code_invalid'] = 'Código de autenticación inválido';
$lang['aauth_error_totp_code_invalid'] = 'Código de autenticación inválido';


// Errores de actualización de cuenta
$lang['aauth_error_update_email_exists'] = 'La dirección de correo electrónico ya existe en el sistema. Por favor, introduzca una dirección de correo electrónico diferente.';
$lang['aauth_error_update_username_exists'] = "El nombre de usuario ya existe en el sistema. Por favor ingresa un nombre de usuario distinto.";


// Errores de acceso
$lang['aauth_error_no_access'] = 'Lo sentimos, no tiene acceso al recurso que solicitó.';
$lang['aauth_error_login_failed_email'] = 'La dirección de correo electrónico y la contraseña no coinciden.';
$lang['aauth_error_login_failed_name'] = 'Nombre de usuario y contraseña no coinciden.';
$lang['aauth_error_login_failed_all'] = 'Correo electrónico, nombre de usuario o contraseña no coinciden.';
$lang['aauth_error_login_attempts_exceeded'] = 'Ha excedido sus intentos de inicio de sesión, su cuenta ahora ha sido bloqueada.';
$lang['aauth_error_recaptcha_not_correct'] = 'Lo sentimos, el texto reCAPTCHA ingresado era incorrecto.';

// Errores Misceláneos 
$lang['aauth_error_no_user'] = 'El usuario no existe';
$lang['aauth_error_account_not_verified'] = 'Tu cuenta no ha sido verificada. Por favor revise su correo electrónico y verifique su cuenta.';
$lang['aauth_error_no_group'] = 'El grupo no existe';
$lang['aauth_error_no_subgroup'] = 'Subgrupo no existe';
$lang['aauth_error_self_pm'] = 'No es posible enviarte un mensaje a ti mismo.';
$lang['aauth_error_no_pm'] = 'Mensaje privado no encontrado';


/* Mensajes de información */
$lang['aauth_info_already_member'] = 'El usuario ya es miembro del grupo.';
$lang['aauth_info_already_subgroup'] = 'El subgrupo ya es miembro del grupo';
$lang['aauth_info_group_exists'] = 'El nombre del grupo ya existe';
$lang['aauth_info_perm_exists'] = 'El nombre del permiso ya existe';
