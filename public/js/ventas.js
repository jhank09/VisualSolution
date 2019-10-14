function agregar_producto(){
  let id_producto = $("#id_producto").val();
  let nombre_p = $("#id_producto option:selected").text();
  let cantidad = $("#cantidad").val();


  $("#tb_productos").append(
    "<tr id='tr"+id_producto+"'> <input type='hidden' name='producto[]' value='"+id_producto+"'> <input type='hidden' name='cantidad[]' value='"+cantidad+"'> <td>"+nombre_p+"</td><td>"+cantidad+"</td><td><button type='button' onclick='$("+'"'+"#tr"+id_producto+'"'+").remove()' class='btn btn-danger'>X</button></td><tr>"
  );
}
