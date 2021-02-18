<?php

      // Definimos o nome do arquivo que será exportado
      $arquivo = 'FICHA DE INVESTIGAÇÃO CLÍNICA.xls';

          $visita3 = $aux['visita'];
          $grupoRisco = $aux['grupoRisco'];
          $idade3 = $aux['idade'];
          $peso3 = $aux['peso3'];
          $estatura3 = $aux['estatura3'];
          $circAbd = $aux['circAbd'];
          $gordCorp = $aux['gordCorp'];
          $muscEsq = $aux['muscEsq'];
          $matabolismo = $aux['matabolismo'];
          $idadeC = $aux['idadeC'];
          $gordVisc = $aux['gordVisc'];
          $pas1 = $aux['pas1'];
          $pad1 = $aux['pad1'];
          $fc1 = $aux['fc1'];
          $pas2 = $aux['pas2'];
          $pad2 = $aux['pad2'];
          $fc2 = $aux['fc2'];
          $pas3 = $aux['pas3'];
          $pad3 = $aux['pad3'];
          $fc3 = $aux['fc3'];
          $bracoDom = $aux['bracoDom'];
          $m1d = $aux['m1d'];
          $m2d = $aux['m2d'];
          $m1e = $aux['m1e'];
          $m2e = $aux['m2e'];
          $ecgR = $aux['ecgR'];
          $ecg10 = $aux['ecg10'];
          $eco = $aux['eco'];
          $holter = $aux['holter'];
          $pasB = $aux['pasB'];
          $padB = $aux['padB'];
          $fcB = $aux['fcB'];
          $pas30 = $aux['pas30'];
          $pad30 = $aux['pad30'];
          $fc30 = $aux['fc30'];
          $pas60 = $aux['pas60'];
          $pad60 = $aux['pad60'];
          $fc60 = $aux['fc60'];
          $pas120 = $aux['pas120'];
          $pad120 = $aux['pad120'];
          $fc120 = $aux['fc120'];
          $medicamentos = $aux['medicamentos'];
          $resultados = $aux['resultados'];
          $dataCol = $aux['dataCol'];

      $html = '';
      $html .= '<table border="1">';

      $html .= '<tr>';
      $html .= '<th align=center colspan="6">RESULTADO: FICHA DE INVESTIGAÇÃO</tr>';
      $html .= '</tr>';

      $html .= '<tr>
                   <th align=left colspan="6">DADOS PESSOAIS:<\th>
              </tr>';
      $html .= '<tr>
                   <th align=left colspan="6">PACIENTE: '.$aux1["nome"].'<\th>
              </tr>';
      $html .= '<tr>
                   <th align=left colspan="6">IDADE: '.$aux["idade"].'<\th>
              </tr>';
      $html .= '<tr>
                   <th align=left colspan="6">DATA DO EXAME: '.$aux["data"].'<\th>
              </tr>';
      $html .= '<tr>
                   <th align=left colspan="6">VISITA: '.$aux["visita"].'<\th>
              </tr>';
      $html .= '<tr>
                   <th align=center colspan="6">QUESTIONÁRIO<\th>
                </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Grupo de Risco</th>
                <td colspan="3">'.$aux["grupoRisco"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Peso</th>
                <td colspan="3" align=left>'.$aux["peso3"].'Kg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Estatura</th>
                <td colspan="3" align=left>'.$aux["estatura3"].'cm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Circunferência abdominal</th>
                <td colspan="3" align=left>'.$aux["circAbd"].'cm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Gordura corporal</th>
                <td align=left colspan="3">'.$aux["gordCorp"].'%</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Músculo esquelético</th>
                <td align=left colspan="3">'.$aux["muscEsq"].'%</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Metabolismo</th>
                <td colspan="3">'.$aux["matabolismo"].'Kcal</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Idade corporal</th>
                <td colspan="3">'.$aux["idadeC"].' anos</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Gordura visceral</th>
                <td colspan="3">'.$aux["gordVisc"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAS 1</th>
                <td colspan="3">'.$aux["pas1"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAS 2</th>
                <td colspan="3">'.$aux["pas2"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAS 3</th>
                <td colspan="3">'.$aux["pas3"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAD 1</th>
                <td colspan="3">'.$aux["pad1"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAD 2</th>
                <td colspan="3">'.$aux["pad2"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAD 3</th>
                <td colspan="3">'.$aux["pad3"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">FC 1</th>
                <td colspan="3">'.$aux["fc1"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">FC 2</th>
                <td colspan="3">'.$aux["fc2"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">FC 3</th>
                <td colspan="3">'.$aux["fc3"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Braço dominante</th>
                <td colspan="3">'.$aux["bracoDom"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Força de preensão (braço direito)</th>
                <td colspan="2">M1 '.$aux["m1d"].'</td>
                <td colspan="1">M2 '.$aux["m2d"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Força de preensão (braço esquerdo)</th>
                <td colspan="2"> M1'.$aux["m1e"].'</td>
                <td colspan="1"> M2'.$aux["m2e"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">ECG repouso</th>
                <td colspan="3">'.$aux["ecgR"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">ECG (10 minutos)</th>
                <td colspan="3">'.$aux["ecg10"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">ECO</th>
                <td colspan="3">M2 '.$aux["eco"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">HOLTER</th>
                <td colspan="3">M2 '.$aux["holter"].'</td>
              </tr>';
       $html .= '<tr>
                   <th align=center colspan="6">MONITORAMENTO DA PA DURANTE A QUIMIOTERAPIA<\th>
              </tr>';
       $html .= '<tr>
                   <td colspan="3"></td>
                   <th colspan="1">PAS</th>
                   <th colspan="1">PAD</th>
                   <th colspan="1">FC</th>
                </tr>';
       $html .= '<tr>
                <th align=left colspan="3" scope="row">BASAL</th>
                <td colspan="1">'.$aux["pasB"].' mmhg</td>
                <td colspan="1">'.$aux["padB"].' mmhg</td>
                <td colspan="1">'.$aux["fcB"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">30min</th>
                <td colspan="1">'.$aux["pas30"].' mmhg</td>
                <td colspan="1">'.$aux["pad30"].' mmhg</td>
                <td colspan="1">'.$aux["fc30"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">60min</th>
                <td colspan="1">'.$aux["pas60"].' mmhg</td>
                <td colspan="1">'.$aux["pad60"].' mmhg</td>
                <td colspan="1">'.$aux["fc60"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">120min</th>
                <td colspan="1">'.$aux["pas120"].' mmhg</td>
                <td colspan="1">'.$aux["pad120"].' mmhg</td>
                <td colspan="1">'.$aux["fc120"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Medicamentos que o paciente utiliza</th>
                <td colspan="3">'.$aux["medicamentos"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Resultados dos exames do paciente</th>
                <td colspan="3">'.$aux["resultados"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="6" scope="row">Data da coleta: '.$aux["dataCol"].'</th>
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