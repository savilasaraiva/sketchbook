// $(".acessarBtn").on("click", function() {
//   nome = (this).name;
//   data = $("#acessarPerfil" + nome).serialize();

//   alert(data);

//   $.ajax({
//     type: "POST",
//     url: "../perfil.php",
//     data: data,
//     dataType: "json"
//   })
//     .done(function(response) {
//       if (response.status == true) {
//         alert("Registo bem Sucedido!");
//       } else {
//         alert("Uups! Ocorreu algum erro!");
//       }
//     })
//     .fail(function(xhr, desc, err) {
//       alert("Uups! Ocorreu algum erro!");
//       console.log(xhr);
//       console.log("Detalhes: " + desc + "nErro:" + err);
//     });
// });
