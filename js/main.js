
// scripit owl carousel
var owl = $('.owl-carousel');
owl.owlCarousel({
    margin: 10,
    loop: true,
    responsive: {
    0: {
        items: 1
    },
    600: {
        items: 2
    },
    1000: {
        items: 3
    }
    }
});
// script scroll nav do header
window.addEventListener('scroll', function(){
    const nav = document.querySelector('nav');
    nav.classList.toggle("sticky", window.scrollY > 0);
});

// script back to top com jquery
let btn = $(".back-to-top");

btn.click(function() {
  $('html, body').animate({scrollTop:0}, 'slow');
});

// script valida cpf 
        function ValidaCPF(){	
            var RegraValida=document.getElementById("RegraValida").value; 
            var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/;	 
            if (cpfValido.test(RegraValida) == true)	{ 
                swal("'CPF Válido'",'Pode continuar seu cadastro', 'success');	
            } else	{	 
            swal("CPF Inválido", 'Por favor verifique seu CPF', 'error');	
            }
            }
           
            // script valida cadastro               function ValidarCadastro(){
            // script valida cadastro                let CadastroValido = document.getElementById("CadastroValido").value;
            // script valida cadastro                 let cadastroOk =  }

           // script mascara cpf
          function fMasc(objeto,mascara) {
        obj=objeto
        masc=mascara
        setTimeout("fMascEx()",1)
        }
        
          function fMascEx() {
        obj.value=masc(obj.value)
        }
        
           function mCPF(cpf){
        cpf=cpf.replace(/\D/g,"")
        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
        cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
        return cpf
        }
        // script mascara de telefone
        function mask(o, f) {
            setTimeout(function() {
              var v = mphone(o.value);
              if (v != o.value) {
                o.value = v;
              }
            }, 1);
          }
          
          function mphone(v) {
            var r = v.replace(/\D/g, "");
            r = r.replace(/^0/, "");
            if (r.length > 10) {
              r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
            } else if (r.length > 5) {
              r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
            } else if (r.length > 2) {
              r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
            } else {
              r = r.replace(/^(\d*)/, "($1");
            }
            return r;
          }
 // script file
    var $input    = document.getElementById('input-file'),
    $fileName = document.getElementById('file-name');

    $input.addEventListener('change', function(){
      $fileName.textContent = this.value;
    });


 // script mascara cnpj
    function FormataCnpj(campo, teclapres)
    {
      var tecla = teclapres.keyCode;
      var vr = new String(campo.value);
      vr = vr.replace(".", "");
      vr = vr.replace("/", "");
      vr = vr.replace("-", "");
      tam = vr.length + 1;
      if (tecla != 14)
      {
        if (tam == 3)
          campo.value = vr.substr(0, 2) + '.';
        if (tam == 6)
          campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 5) + '.';
        if (tam == 10)
          campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 3) + '.' + vr.substr(6, 3) + '/';
        if (tam == 15)
          campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 3) + '.' + vr.substr(6, 3) + '/' + vr.substr(9, 4) + '-' + vr.substr(13, 2);
      }
    }

    
  // script mudar cadastro

  $("#tipo_usuario").change(function(){
    var tipo_usuario = $('#tipo_usuario').val();
    if(tipo_usuario == "f"){
      $('.nome').html(`<label for="nome">Nome completo</label><input type="text" id="nome" name="nome" placeholder="insira seu nome completo..." >`);
      $('.documento').html(`<label for="documento">Registro de documento</label>
      <input type="text" id="RegraValida" maxlength="14" name="RegraValida" placeholder="Insira seu CPF..." onkeydown="javascript: fMasc( this, mCPF );" required>`);
      $('.nascimento').html(`<label for="nascimento">Data de nasc.</label>
      <input type="date" id="data_nascimento" name="data_nascimento" placeholder="Sua data de nascimento..." required>`);
      $('.celular').html(`<label for="celular">Celular</label>
      <input type="text" placeholder="Seu número de celular" id="celular" name="celular"  onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" required>`);
      $('.valida_cpf').html(` <label for="valida_cpf">Clique para validar seu CPF</label>
      <input type="submit" class="btn-blue" style="max-width: 280px;" id="valida_cpf" name="valida_cpf"  value="Validar CPF" onclick="ValidaCPF();">`);
    }else if(tipo_usuario == "j"){
      $('.nome').html(`<label for="nome">Razão Social</label><input type="text" id="nome" name="nome" placeholder="insira sua razão social" >`);
      $('.documento').html(`<label for="documento">Registro de documento</label>
      <input type="text" name="cnpj" id="cnpj" onkeyup="FormataCnpj(this,event)" maxlength="18" placeholder="Informe seu CNPJ..."  class="form-control input-md" ng-model="cadastro.cnpj" required>`);
      $('.nascimento').html(`<label for="nascimento">Data de fundação</label>
      <input type="date" id="data_nascimento" name="data_nascimento" placeholder="Sua data de nascimento..." required>`);
      $('.celular').html(` <label>WhatsApp</label>
      <input type="text" placeholder="Número do whatsapp" id="whats" name="whats"  onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">`);
      $('.valida_cpf').html(``);
    }
  });

  


 