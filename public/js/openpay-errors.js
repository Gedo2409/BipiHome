function checkError(errorCode) {
 var code = errorCode;
 switch (code) {
  case 1000:
   swal({
    title: "Hubo un error",
    text: "Ocurrió un error interno en el servidor de Openpay",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1001:
   swal({
    title: "Hubo un error",
    text: "El formato de la petición no es JSON, los campos no tienen el formato correcto, o la petición no tiene campos que son requeridos.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1002:
   swal({
    title: "Hubo un error",
    text: "La llamada no esta autenticada o la autenticación es incorrecta.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1003:
   swal({
    title: "Hubo un error",
    text: "La operación no se pudo completar por que el valor de uno o más de los parametros no es correcto.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1004:
   swal({
    title: "Hubo un error",
    text: "Un servicio necesario para el procesamiento de la transacción no se encuentra disponible.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1005:
   swal({
    title: "Hubo un error",
    text: "Uno de los recursos requeridos no existe.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1006:
   swal({
    title: "Hubo un error",
    text: "Ya existe una transacción con el mismo ID de orden.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1007:
   swal({
    title: "Hubo un error",
    text: "La transferencia de fondos entre una cuenta de banco o tarjeta y la cuenta de Openpay no fue aceptada.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1008:
   swal({
    title: "Hubo un error",
    text: "Una de las cuentas requeridas en la petición se encuentra desactivada.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1009:
   swal({
    title: "Hubo un error",
    text: "El cuerpo de la petición es demasiado grande.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1010:
   swal({
    title: "Hubo un error",
    text: "Se esta utilizando la llave pública para hacer una llamada que requiere la llave privada, o bien, se esta usando la llave privada desde JavaScript.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1011:
   swal({
    title: "Hubo un error",
    text: "Se solicita un recurso que esta marcado como eliminado.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1012:
   swal({
    title: "Hubo un error",
    text: "El monto transacción esta fuera de los limites permitidos.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1013:
   swal({
    title: "Hubo un error",
    text: "La operación no esta permitida para el recurso.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1014:
   swal({
    title: "Hubo un error",
    text: "La cuenta esta inactiva.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1015:
   swal({
    title: "Hubo un error",
    text: "No se ha obtenido respuesta de la solicitud realizada al servicio.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1016:
   swal({
    title: "Hubo un error",
    text: "El mail del comercio ya ha sido procesada.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1017:
   swal({
    title: "Hubo un error",
    text: "El gateway no se encuentra disponible en ese momento.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;
  case 1018:
   swal({
    title: "Hubo un error",
    text: "El número de intentos de cargo es mayor al permitido.",
    icon: "error",
    buttons: {
     cancel: "Ok",
    },
   });
   break;

   // Almacenamiento
  case 2001:
   swal({
    title: "Atención",
    text: "La cuenta de banco con esta CLABE ya se encuentra registrada en el cliente.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 2002:
   swal({
    title: "Atención",
    text: "La tarjeta con este número ya se encuentra registrada en el cliente.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 2003:
   swal({
    title: "Atención",
    text: "El cliente con este identificador externo (External ID) ya existe.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 2004:
   swal({
    title: "Atención",
    text: "El dígito verificador del número de tarjeta es inválido de acuerdo al algoritmo Luhn.",
    icon: "warning",
    buttons: {
     cancel: "Corroborar mis datos",
    },
   });
   break;
  case 2005:
   swal({
    title: "Atención",
    text: "La fecha de expiración de la tarjeta es anterior a la fecha actual.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 2006:
   swal({
    title: "Atención",
    text: "El código de seguridad de la tarjeta (CVV2) no fue proporcionado.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 2007:
   swal({
    title: "Atención",
    text: "El número de tarjeta es de prueba, solamente puede usarse en Sandbox.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 2008:
   swal({
    title: "Atención",
    text: "La tarjeta no es valida para puntos Santander.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 2009:
   swal({
    title: "Atención",
    text: "El código de seguridad de la tarjeta (CVV2) es inválido.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;

   // Casos de tarjeta

  case 3001:
   swal({
    title: "Atención",
    text: "La tarjeta fue declinada.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 3002:
   swal({
    title: "Atención",
    text: "La tarjeta ha expirado.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 3003:
   swal({
    title: "Atención",
    text: "La tarjeta no tiene fondos suficientes.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 3004:
   swal({
    title: "Atención",
    text: "La tarjeta ha sido identificada como una tarjeta robada.",
    icon: "warning",
    buttons: {
     cancel: "Corroborar mis datos",
    },
   });
   break;
  case 3005:
   swal({
    title: "Atención",
    text: "La tarjeta ha sido rechazada por el sistema antifraudes.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 3006:
   swal({
    title: "Atención",
    text: "La operación no esta permitida para este cliente o esta transacción.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 3007:
   swal({
    title: "Atención",
    text: "Deprecado. La tarjeta fue declinada.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 3008:
   swal({
    title: "Atención",
    text: "La tarjeta no es soportada en transacciones en línea.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 3009:
   swal({
    title: "Atención",
    text: "La tarjeta fue reportada como perdida.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 3010:
   swal({
    title: "Atención",
    text: "El banco ha restringido la tarjeta.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 3011:
   swal({
    title: "Atención",
    text: "El banco ha solicitado que la tarjeta sea retenida. Contacte al banco.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
  case 3012:
   swal({
    title: "Atención",
    text: "Se requiere solicitar al banco autorización para realizar este pago.",
    icon: "warning",
    buttons: {
     cancel: "Intentar con otra tarjeta",
    },
   });
   break;
 }

}
