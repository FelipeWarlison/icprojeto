  <?php

      // Definimos o nome do arquivo que será exportado
      $arquivo = 'FICHA DE CONSULTA CARDIOLÓGICA.xls';

      $visita2 = $aux['visita'];
      $nasc2 = $aux['nasc'];
      $ectoscopia = $aux['ectoscopia'];
      $inspTorax = $aux['inspTorax'];
      $ictuscordis1 = $aux['ictuscordis1'];
      $pulsosA = $aux['pulsosA'];
      $pulsosP = $aux['pulsosP'];
      $ictuscordis2 = $aux['ictuscordis2'];
      $fc = $aux['fc'];
      $SO2 = $aux['SO2'];
      $rCardiaco = $aux['rCardiaco'];
      $bulhas = $aux['bulhas'];
      $sopro1 = $aux['sopro1'];
      $foco = $aux['foco'];
      $irradiacao = $aux['irradiacao'];
      $intensidade = $aux['intensidade'];
      $sopros = $aux['sopros'];
      $soproArteria = $aux['soproArteria'];
      $auscultaP = $aux['auscultaP'];
      $visc = $aux['visc'];

      $html = '';
    $html .= '<table border="1">';

    $html .= '<tr>';
    $html .= '<th align=center colspan="6">FICHA DE CONSULTA CARDIOLÓGICA</tr>';
    $html .= '</tr>';
    
    $html .= '<tr>
                   <th align=left colspan="6">PACIENTE: '.$aux1["nome"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">DATA DA CONSULTA: '.$aux["data"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">VISITA: '.$aux["visita"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">DATA DE NASCIMENTO: '.$aux["nasc"].'<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="3" scope="row">ECTOSCOPIA</th>
                    <td colspan="3">'.$aux["ectoscopia"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left rowspan="2" colspan="3">INSPEÇÃO</th>
                <td colspan="3">Inspeção geral do tórax: <b>'.$aux["inspTorax"].'</b></td>
             </tr>
             <tr>
                <td colspan="3">Ictus cordis: <b>'.$aux["ictuscordis1"].'</b></td>
             </tr>';
    $html .= '<tr>
                <th align=left rowspan="3" colspan="3">PALPAÇÃO</th>
                <td colspan="3">Pulsos arteriais (Carótida/Aorta): <b>'.$aux["pulsosA"].'</b></td>
              </tr>
              <tr>
                <td colspan="3">Pulsos periféricos (Radial/Pedioso/Tibial posterior): <b>'.$aux["pulsosP"].'</b></td>
              </tr>
              <tr>
                <td colspan="3">Ictus cordis: <b>'.$aux["ictuscordis2"].'</b></td>
              </tr>';
    $html .= '<tr>
                <th align=left rowspan="2" colspan="3">AUSCULTA</th>
                <td colspan="3">FC: <b>'.$aux["fc"].'</b></td>
             </tr>
             <tr>
                <td colspan="3">SO₂: <b>'.$aux["SO2"].'</b></td>
             </tr>';
    $html .= '<tr>
                <th align=left colspan="3" scope="row">RITMO CARDÍACO</th>
                    <td colspan="3">'.$aux["rCardiaco"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="3" scope="row">BULHAS</th>
                    <td colspan="3">'.$aux["bulhas"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left rowspan="5" colspan="3">SOPROS: <b>('.$aux["sopro1"].')</b></th>
              </tr>
              <tr>
                <td colspan="3">foco: <b>'.$aux["foco"].'</b></td>
              </tr>
              <tr>
                <td colspan="3">Irradiação: <b>'.$aux["irradiacao"].'</b></td>
              </tr>
              <tr>
                <td colspan="3">Intensidade: <b>'.$aux["intensidade"].'</b></td>
              </tr>
              <tr>
                <td colspan="3"> <b>'.$aux["sopros"].'</b></td>
              </tr>
              <tr>
                <td colspan="3">Sopros em artérias: <b>'.$aux["soproArteria"].'</b></td>
              </tr>';
    $html .= '<tr>
                <th align=left rowspan="2" colspan="3">EXAME FÍSICO GERAL</th>
                <td colspan="3">Ausculta Pulmonar: <b>'.$aux["auscultaP"].'</b></td>
             </tr>
             <tr>
                <td colspan="3">Visceromegalias: <b>'.$aux["visc"].'</b></td>
             </tr>';

    $html .= '</table>';
    // Configurações header para forçar o download
    header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
    header ("Content-Description: PHP Generated Data" );
     //Envia o conteúdo do arquivo
    echo $html;

    exit;
    ?>