<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title></title>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta name="author" content="liuyang@gmail.com">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<title>StreetSales Mercado Do Óculos</title>

<!-- slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="../css/style.css" rel="stylesheet" />
<!-- responsive style -->


<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	  <link rel="stylesheet" type="text/css" href="../css/ucan.css" />
	  <script type="text/javascript" src="../js/mootools.js"></script>
	  <script type="text/javascript" src="../js/glass.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	  <script type="text/javascript">
	  
		  var scriptUrl = 'http://192.168.0.1/glass/';
		  window.addEvent('domready', function() {
			  UCAN.glass.init();
		  })
	  //-->
	  </script>
	
	</head>
  <style>
  input[type="file"] {
    display: none;
  }
  .file-input {
    width: 100%;
    height: 100%
  }
  #labelid {
    padding: 20px 10px;
    width: 72px;
    background: linear-gradient(to right, #18a0e1 0%, #347ab7 100%);
    color: #FFF;
    text-transform: uppercase;
    text-align: center;
    display: block;
    height: 48px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 20px;
    margin-left: 20px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
#receita {
  background: linear-gradient(to right, #205456 0%, #1cbdcf 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.pagenumbers button {
  width: 50px;
  height: 50px;

  appearance: none;
  border: none;
  outline: none;
  cursor: pointer;
  background-color: #44AAEE;
  margin: 5px;
  transition: 0.4s;
  color: #FFF;
  font-size: 18px;
  text-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
}

.pagenumbers button.active {
  box-shadow: inset 0px 0px 4px rgba(0, 0, 0);
}
.myButton {
    box-shadow: 0px 4px 0px 0px #bfdee8;
    background: linear-gradient(to bottom, #2ba6fb  5%, #327dba  100%);
    background-color: #ededed;
    border: 1px solid #20c2e9;
    display: inline-block;
    cursor: pointer;
    font-weight: bold;
    font-family: Trebuchet MS;
    font-size: 17px;
    padding: 7px 25px;
    text-decoration: none;

  }



.myButton:active {
position: relative;
top: 1px;
}
</style>

	<section style="background-color: #d0dbdd; height: 812px;" class="glass_section2 layout_padding">
      <div style="width:1423px;" class="page">
        <div class="heading_container" style="justify-content: center;">
            <h1>
              <span style="font-size:143%; font-family: 'Anton', sans-serif; background: linear-gradient(to right, #18a0e1 0%, #347ab7 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Experimente seu modelo favorito</span>
            </h1>
        </div>
        <div class="row">
          <div class="col-6" style='font-weight: bolder; margin-left: 15px; margin-bottom: 5px; width:100px;'>
            Zoom da foto
          </div>
          <div class="col-4" style='font-weight: bolder; margin-left: 15px; margin-bottom: 5px; width:100px;'>
            Faça upload de imagens de óculos sem fundo! Remova fundos <a target="_blank" href="https://www.remove.bg/pt-br">Aqui!</a>
          </div>
        </div>
        <div class="col-1">
          <!-- avatar img start -->
          <div id="glassFrame" class="glassFrame">
            <div class="drager" id="drager" style="display:none">&nbsp;</div>
            <img src=../imgs/m/m_3.jpg width="403" height="500" border="0" title="" id="glassAvatar" class="glassAvatar" style="left:0px;top:0px" />
            <img src=../imgs/loading.gif width="16" height="16" border="0" title="" class="loading" style="top:2px;left:372px"  id="loading" />
            <img  width="127" height="52" border="0" title="" class="dragInfo" style="top:82px;left:52px;display:none"  id="dragInfo" />
            <div class="control-area" id="control-area" style="display:none; width: 211px;">
              <div>
                  <input type="submit" name="button9" id="moveUp" value="Cima" class="myButton"/>
                  <input type="submit" name="button10" id="moveDown" value="Baixo" class="myButton"/>
                  <input type="submit" name="button11" id="moveLeft" value="Esquerda" class="myButton"/>
                  <input type="submit" name="button12" id="moveRight" value="Direita" class="myButton"/>
              </div>
            </div>
    
            <div class="control-area-background" id="control-area-background" style="display:none">&nbsp;</div>
            <div class="avtzoom" id="avatar-zoom" style="display:block">
              <div id="myElement" class="slider">
                <div style="top:5px;" class="knob">
                </div>
              </div>
            </div>
            <div class="glasszoom" id="glass-zoom" style="display:block; left:287px;">
              <div id="glassSlider" class="slider">
                <div style="top: 5px; position:relative;"class="knob">
                </div>
              </div>
   
            </div>
            <!-- control area end -->
          </div>
        </div>
        <div class="form-group row" style="height: 500px;">
          <div class="glass-select-container"></div>
          <div class='col'></div>
          <ul class="thumb" id="glass-list">
            <div id='pagenation' style="justify-content: center; width: 1114px;" class="glass_container">
            </div>
          </ul>
        </div>
        <input onchange="loadFile(event)" type="file" accept=".png, .jpg, .jpeg" name="upl" id="upl" />
        <label id="labelid" style="cursor: pointer;" for='upl'>foto</label>
        <br> <br> <br> <br>
        <div style="background-color: #d0dbdd;" class="clr">
          <div style="font-family: 'Anton', sans-serif;">
            <div class="row">
              <div class="col-2">
                <label id="receita" style="margin-bottom: 5px;" for="lente">LENTE:</label>
                <input class="form-control" type="text" id="lente" name="lente">
              </div>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header float-right">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" style="text-align: center;	border-collapse: collapse !important;">
                          <tr>
                            <td style="border: 1px solid black !important;" colspan="2"></td>
                            <td style="border: 1px solid black !important;">Esférico</td>
                            <td style="border: 1px solid black !important;">Cilindrico</td>
                            <td style="border: 1px solid black !important;">EIXO</td>
                            <td style="border: 1px solid black !important;">DNP</td>
                            <td style="border: 1px solid black !important;">ALTURA</td>
                          </tr>
                          <tr>
                            <td rowspan=2 style="border: 1px solid black !important;">LONGE</td>
                            <td style="border: 1px solid black !important;">OD</td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="longe_od_esf" name="longe_od_esf">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="longe_od_cil" name="longe_od_cil">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="longe_od_eixo" name="longe_od_eixo">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="longe_od_dnp" name="longe_od_dnp">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="longe_od_altura" name="longe_od_altura">
                            </td>
                          </tr>
                          <tr>
                            <td style="border: 1px solid black !important;">OE</td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="longe_oe_esf" name="longe_oe_esf">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="longe_oe_cil" name="longe_oe_cil">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="longe_oe_eixo" name="longe_oe_eixo">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="longe_oe_dnp" name="longe_oe_dnp">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="longe_oe_altura" name="longe_oe_altura">
                            </td>
                          </tr>
                          <tr>
                            <td rowspan=2 style="border: 1px solid black !important;">PERTO</td>
                            <td style="border: 1px solid black !important;">OD</td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="perto_od_esf" name="perto_od_esf">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="perto_od_cil" name="perto_od_cil">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="perto_od_eixo" name="perto_od_eixo">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="perto_od_dnp" name="perto_od_dnp">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="perto_od_altura" name="perto_od_altura">
                            </td>
                          </tr>
                          <tr>
                            <td style="border: 1px solid black !important;">OE</td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="perto_oe_esf" name="perto_oe_esf">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="perto_oe_cil" name="perto_oe_cil">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="perto_oe_eixo" name="perto_oe_eixo">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="perto_oe_dnp" name="perto_oe_dnp">
                            </td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="perto_oe_altura" name="perto_oe_altura">
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <label id="receita" style="margin-bottom: 5px;" for="armacao">ARMAÇÃO:</label>
                <input class="form-control" type="text" id="armacao" name="armacao">
              </div>
              <div class="col-2">
                <label id="receita" style="margin-bottom: 5px;" for="grau">Cliente:</label>
                <input class="form-control" type="text" id="Cliente" name="Cliente">
              </div>
              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" style="text-align: center;	border-collapse: collapse !important;">
                          <tr>
                            <td colspan="4" style="border: 1px solid black !important;">Medidas Armação</td>
                          </tr>
                          <tr>
                            <td style="border: 1px solid black !important;">TA</td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="med_arm_ta" name="med_arm_ta" value="{{empty($receita->med_arm_ta)?'':$receita->med_arm_ta}}">
                            </td>
                            <td style="border: 1px solid black !important;">MD</td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="med_arm_md" name="med_arm_md" value="{{empty($receita->med_arm_md)?'':$receita->med_arm_md}}">
                            </td>
                          </tr>
                          <tr>
                            <td style="border: 1px solid black !important;">PT</td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="med_arm_pt" name="med_arm_pt" value="{{empty($receita->med_arm_pt)?'':$receita->med_arm_pt}}">
                            </td>
                            <td style="border: 1px solid black !important;">VT</td>
                            <td style="border: 1px solid black !important;">
                              <input maxlength="10" type="text" id="med_arm_vt" name="med_arm_vt" value="{{empty($receita->med_arm_vt)?'':$receita->med_arm_vt}}">
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pagenumbers" id="pagination"></div>
            </div>
          </div>
        </div>
        <div style="background-color: #d0dbdd;" class="row">
          <div class="col-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Lentes
            </button>
          </div>
          <div class="col-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
              Armacao
            </button>
          </div>
          <div class="col-1">
            <button onclick="enviar();" type="button" class="btn btn-success">Enviar</button>
          </div>
      </div>
        


                </div>
        
      </div>
    </section>
	
</html>

<script type="text/javascript">
  function enviar() {
    lente = document.getElementById('lente').value;
    armacao = document.getElementById('armacao').value;
    cliente = document.getElementById('Cliente').value;
    //linha 1
    longe_od_esf = document.getElementById('longe_od_esf').value;
    longe_od_cil = document.getElementById('longe_od_cil').value;
    longe_od_eixo = document.getElementById('longe_od_eixo').value;
    longe_od_dnp = document.getElementById('longe_od_dnp').value;
    longe_od_altura = document.getElementById('longe_od_altura').value;
    //linha 2
    longe_oe_esf = document.getElementById('longe_oe_esf').value;
    longe_oe_cil = document.getElementById('longe_oe_cil').value;
    longe_oe_eixo = document.getElementById('longe_oe_eixo').value;
    longe_oe_dnp = document.getElementById('longe_oe_dnp').value;
    longe_oe_altura = document.getElementById('longe_oe_altura').value;
    //linha 3
    perto_od_esf = document.getElementById('perto_od_esf').value;
    perto_od_cil = document.getElementById('perto_od_cil').value;
    perto_od_eixo = document.getElementById('perto_od_eixo').value;
    perto_od_dnp = document.getElementById('perto_od_dnp').value;
    perto_od_altura = document.getElementById('perto_od_altura').value;
    //linha  4
    perto_oe_esf = document.getElementById('perto_oe_esf').value;
    perto_oe_cil = document.getElementById('perto_oe_cil').value;
    perto_oe_eixo = document.getElementById('perto_oe_eixo').value;
    perto_oe_dnp = document.getElementById('perto_oe_dnp').value;
    perto_oe_altura = document.getElementById('perto_oe_altura').value;
    //armacao
    //linha 1
    med_arm_ta = document.getElementById('med_arm_ta').value;
    med_arm_md = document.getElementById('med_arm_md').value;
    //linha 2
    med_arm_pt = document.getElementById('med_arm_pt').value;
    med_arm_vt = document.getElementById('med_arm_vt').value;

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
    myHeaders.append("Cookie", "PHPSESSID=kqcr5nu5c24okqk3bespa8j4n8");

    fetch("{{base_url()}}Receitasoculos/salvaroculos", {
        method: 'POST',
        headers: myHeaders,
        body: 'lente=' + lente + '&armacao=' + armacao + '&longe_od_esf=' + longe_od_esf +
          '&longe_od_cil=' + longe_od_cil + '&longe_od_eixo=' + longe_od_eixo + '&longe_od_dnp=' + longe_od_dnp +
          '&longe_od_altura=' + longe_od_altura + '&longe_oe_esf=' + longe_oe_esf + '&longe_oe_cil=' + longe_oe_cil +
          '&longe_oe_eixo=' + longe_oe_eixo + '&longe_oe_dnp=' + longe_oe_dnp + '&longe_oe_altura=' + longe_oe_altura +
          '&perto_od_esf=' + perto_od_esf + '&perto_od_cil=' + perto_od_cil + '&perto_od_eixo=' + perto_od_eixo +
          '&perto_od_dnp=' + perto_od_dnp + '&perto_od_altura=' + perto_od_altura + '&perto_oe_esf=' + perto_oe_esf +
          '&perto_oe_cil=' + perto_oe_cil + '&perto_oe_eixo=' + perto_oe_eixo + '&perto_oe_dnp=' + perto_oe_dnp +
          '&perto_oe_altura=' + perto_oe_altura + '&med_arm_ta=' + med_arm_ta + '&med_arm_md=' + med_arm_md +
          '&med_arm_pt=' + med_arm_pt + '&med_arm_vt=' + med_arm_vt + '&cliente=' + cliente +
          '',

      })
      .then(
        Swal.fire(
          'Salvo',
          'Salvo receita com sucesso!',
          'success'
        ))
      .catch(error => {
        //  console.error('Error:', error);
      });

    document.getElementById('lente').value = '';
    document.getElementById('Cliente').value = '';
    document.getElementById('armacao').value = '';

    //linha 1
    document.getElementById('longe_od_esf').value = '';
    document.getElementById('longe_od_cil').value = '';
    document.getElementById('longe_od_eixo').value = '';
    document.getElementById('longe_od_dnp').value = '';
    document.getElementById('longe_od_altura').value = '';
    //linha 2
    document.getElementById('longe_oe_esf').value = '';
    document.getElementById('longe_oe_cil').value = '';
    document.getElementById('longe_oe_eixo').value = '';
    document.getElementById('longe_oe_dnp').value = '';
    document.getElementById('longe_oe_altura').value = '';
    //linha 3
    document.getElementById('perto_od_esf').value = '';
    document.getElementById('perto_od_cil').value = '';
    document.getElementById('perto_od_eixo').value = '';
    document.getElementById('perto_od_dnp').value = '';
    document.getElementById('perto_od_altura').value = '';
    //linha  4
    document.getElementById('perto_oe_esf').value = '';
    document.getElementById('perto_oe_cil').value = '';
    document.getElementById('perto_oe_eixo').value = '';
    document.getElementById('perto_oe_dnp').value = '';
    document.getElementById('perto_oe_altura').value = '';
    //armacao
    //linha 1
    document.getElementById('med_arm_ta').value = '';
    document.getElementById('med_arm_md').value = '';
    //linha 2
    document.getElementById('med_arm_pt').value = '';
    document.getElementById('med_arm_vt').value = '';

  }
  window.onload = function() {
    const data = []
    list_items = [
      '<div class="box"><li><div class="img-box"><a href="javascript:void 0"><img src="../imgs/g/g_1_thumb.jpg" width="150" height="75" border="0" title=""/></a></div><div class="price"><h6>R$50</h6><a href="">Comprar Agora</a></div></li></div>',
      '<div class="box"><li><div class="img-box"><a href="javascript:void 0"><img src="../imgs/g/g_2_thumb.jpg" width="150" height="75" border="0" title=""/></a></div><div class="price"><h6>R$50</h6><a href="">Comprar Agora</a></div></li></div>',
      '<div class="box"><li><div class="img-box"><a href="javascript:void 0"><img src="../imgs/g/g_3_thumb.jpg" width="150" height="75" border="0" title=""/></a></div><div class="price"><h6>R$50</h6><a href="">Comprar Agora</a></div></li></div>',
      '<div class="box"><li><div class="img-box"><a href="javascript:void 0"><img src="../imgs/g/g_1_thumb.jpg" width="150" height="75" border="0" title=""/></a></div><div class="price"><h6>R$50</h6><a href="">Comprar Agora</a></div></li></div>',
      '<div class="box"><li><div class="img-box"><a href="javascript:void 0"><img src="../imgs/g/g_2_thumb.jpg" width="150" height="75" border="0" title=""/></a></div><div class="price"><h6>R$50</h6><a href="">Comprar Agora</a></div></li></div>',
      '<div class="box"><li><div class="img-box"><a href="javascript:void 0"><img src="../imgs/g/g_3_thumb.jpg" width="150" height="75" border="0" title=""/></a></div><div class="price"><h6>R$50</h6><a href="">Comprar Agora</a></div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos6"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl6" id="upl6"/><label id="labelid" style="cursor: pointer;" for="upl6">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos7"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl7" id="upl7"/><label id="labelid" style="cursor: pointer;" for="upl7">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos8"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl8" id="upl8"/><label id="labelid" style="cursor: pointer;" for="upl8">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos9"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl9" id="upl9"/><label id="labelid" style="cursor: pointer;" for="upl9">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos10"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl10" id="upl10"/><label id="labelid" style="cursor: pointer;" for="upl10">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos11"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl11" id="upl11"/><label id="labelid" style="cursor: pointer;" for="upl11">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos12"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl12" id="upl12"/><label id="labelid" style="cursor: pointer;" for="upl12">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos13"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl13" id="upl13"/><label id="labelid" style="cursor: pointer;" for="upl13">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos14"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl14" id="upl14"/><label id="labelid" style="cursor: pointer;" for="upl14">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos15"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl15" id="upl15"/><label id="labelid" style="cursor: pointer;" for="upl15">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos16"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl16" id="upl16"/><label id="labelid" style="cursor: pointer;" for="upl16">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos17"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl17" id="upl17"/><label id="labelid" style="cursor: pointer;" for="upl17">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos18"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl18" id="upl18"/><label id="labelid" style="cursor: pointer;" for="upl18">Foto óculos</label>		</div></li></div>',
      '<div class="box"><li><div class="img-box"> <div id="selectoculos19"></div></div><div class="price"><input onchange="loadFile2(event)"  type="file"  accept=".png, .jpg, .jpeg" name="upl19" id="upl19"/><label id="labelid" style="cursor: pointer;" for="upl19">Foto óculos</label>		</div></li></div>',
    ];

    const list_element = document.getElementById('pagenation');
    const pagination_element = document.getElementById('pagination');
    let current_page = 1;
    let rows = 6;
    DisplayList(list_items, list_element, rows, current_page);
    SetupPagination(list_items, pagination_element, rows);

    function DisplayList(items, wrapper, rows_per_page, page) {
      wrapper.innerHTML = "";
      page--;

      let start = rows_per_page * page;
      let end = start + rows_per_page;
      let paginatedItems = items.slice(start, end);

      for (let i = 0; i < paginatedItems.length; i++) {
        let item = paginatedItems[i];
        let item_element = document.createElement('div');
        item_element.innerHTML = item;
        wrapper.appendChild(item_element);
        UCAN.util.listenGlass();
      }
    }

    function SetupPagination(items, wrapper, rows_per_page) {
      wrapper.innerHTML = "";
      let page_count = Math.ceil(items.length / rows_per_page);
      for (let i = 1; i < page_count + 1; i++) {
        let btn = PaginationButton(i, items);
        wrapper.appendChild(btn);
      }
    }

    function PaginationButton(page, items) {
      let button = document.createElement('button');
      button.innerText = page;
      if (current_page == page) button.classList.add('active');
      button.addEventListener('click', function() {
        current_page = page;
        DisplayList(items, list_element, rows, current_page);
        let current_btn = document.querySelector('.pagenumbers button.active');
        current_btn.classList.remove('active');
        button.classList.add('active');
      });
      return button;
    }
  }
</script>