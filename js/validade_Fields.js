<script type="text/javascript">
            $(document).ready(function(){
                $('#btn-submit').click(function(){
                        //alert('clicou');
                       var campo_vazio = false;
                    //     nome do campo
                    if($('#nome').val() == ''){
                        // se o campo nome estiver vazio mude a cor para
                        // muda a bordar do campo para vermelhor caso estaja vezio
                        $('#nome').css({'border-color':'#A94442'});
                        campo_vazio = true;
                    } else {
                        $('#nome').css({'border-color':'##CCC'});
                    }
                    if($('#nome').val() == ''){
                        alert("Por favor preencha o campo nome.");
                        campo_vazio = true;
                    }


                    if($('#password').val() == ''){
                        alert("Por favor preencha o campo senha.");
                        campo_vazio = true;
                    }
                    if($('#password').val() == ''){
                        $('#password').css({'border-color':'#A94442'});
                        campo_vazio = true;
                    } else {
                        $('#password').css({'border-color':'##CCC'});
                    }
                    if(campo_vazio) return false;
                });
            })
        </script>