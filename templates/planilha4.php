<?php

    // Definimos o nome do arquivo que será exportado
    $arquivo = 'QUESTIONÁRIO DE INFORMAÇÕES SOCIODEMOGRÁFICAS E DE SAÚDE.xls';

          $endereco = $aux['endereco'];
          $telefone = $aux['telefone'];
          $nascimento4 = $aux['nasc'];
          $meio = $aux['meio'];
          $estCivil = $aux['estCivil'];
          $renda = $aux['renda'];
          $cor = $aux['cor'];
          $grau = $aux['grau'];
          $fuma = $aux['fuma'];
          $fuma1 = $aux['fuma1'];
          $fuma2 = $aux['fuma2'];
          $fuma3 = $aux['fuma3'];
          $fuma4 = $aux['fuma4'];
          $bebe = $aux['bebe'];
          $bebe1 = $aux['bebe1'];
          $bebe2 = $aux['bebe2'];
          $hipertensa = $aux['hipertensa'];
          $diabetica = $aux['diabetica'];
          $colesterol = $aux['colesterol'];
          $arritmia = $aux['arritmia'];
          $coracao = $aux['coracao'];
          $cirurgia = $aux['cirurgia'];
          $avc = $aux['avc'];
          $paisCoracao = $aux['paisCoracao'];
          $paisAvc = $aux['paisAvc'];
          $mPrimeira = $aux['mPrimeira'];
          $mUltima = $aux['mUltima'];
          $anticon = $aux['anticon'];
          $gestacoes = $aux['gestacoes'];
          $nascidosV = $aux['nascidosV'];
          $nascidosM = $aux['nascidosM'];
          $partoP = $aux['partoP'];
          $partoN = $aux['partoN'];
          $partoC = $aux['partoC'];
          $aborto = $aux['aborto'];

    $html = '';
    $html .= '<table border="1">';

    $html .= '<tr>';
    $html .= '<th align=center colspan="7">QUESTIONÁRIO DE INFORMAÇÕES SOCIODEMOGRÁFICAS E DE SAÚDE</tr>';
    $html .= '</tr>';

    $html .= '<tr>
                   <th align=left colspan="7">DADOS PESSOAIS:<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="7">PACIENTE: '.$aux1["nome"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="7">CONTATO: '.$aux["telefone"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="7">DATA DE NASCIMENTO: '.$aux["nasc"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="7">ENDEREÇO: '.$aux["endereco"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="7">DATA DA CONSULTA: '.$aux["data"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="7">QUESTIONÁRIO:<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4">Meio onde vive: <td colspan="3">'.$aux["meio"].'</td></th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Estado Civil:</th>
                <td colspan="3">'.$aux["estCivil"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual a renda de sua família:</th>
                <td colspan="3">'.$aux["renda"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual a sua cor (raça)?</th>
                <td colspan="3">'.$aux["cor"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual seu grau de instrução?</th>
                <td colspan="3">'.$aux["grau"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Você fuma atualmente?</th>
                <td colspan="3">'.$aux["fuma"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Fuma o que?</th>
                <td colspan="3">'.$aux["fuma1"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Quantos cigarros fuma por dia?</th>
                <td colspan="3">'.$aux["fuma2"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Com quantos anos começou?</th>
                <td colspan="3">'.$aux["fuma3"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Parou há quanto tempo?</th>
                <td colspan="3">'.$aux["fuma4"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Você consome bebidas alcoólicas atualmente?</th>
                <td colspan="3">'.$aux["bebe"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Com qual frequência?</th>
                <td colspan="3">'.$aux["bebe1"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual a quantidade ingerida por semana?</th>
                <td colspan="3">'.$aux["bebe2"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum médico já falou que você é hipertensa/pressão alta?</th>
                <td colspan="3">'.$aux["hipertensa"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum médico já falou que você é diabética?</th>
                <td colspan="3">'.$aux["diabetica"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum médico já falou que você tem colesterol alto?</th>
                <td colspan="3">'.$aux["colesterol"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum médico já falou que você tem arritmia cardíaca?</th>
                <td colspan="3">'.$aux["arritmia"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum médico já falou que você tem problema no coração?</th>
                <td colspan="3">'.$aux["coracao"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Já realizou alguma cirurgia no coração?</th>
                <td colspan="3">'.$aux["cirurgia"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Já teve algum AVC/derrame?</th>
                <td colspan="3">'.$aux["avc"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">O seu pai ou a sua mãe tem problema de coração?</th>
                <td colspan="3">'.$aux["paisCoracao"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">O seu pai ou a sua mãe teve AVC/derrame?</th>
                <td colspan="3">'.$aux["paisAvc"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual a sua idade quando menstruou pela primeira vez?</th>
                <td colspan="3">'.$aux["mPrimeira"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual a sua idade quando menstruou pela última vez?</th>
                <td colspan="3">'.$aux["mUltima"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Usa algum anticoncepcional?</th>
                <td colspan="3">'.$aux["anticon"].'</td>
              </tr>';  
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Nº de gestações:</th>
                <td colspan="3">'.$aux["gestacoes"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Nº de nascidos vivos:</th>
                <td colspan="3">'.$aux["nascidosV"].'</td>
              </tr>';  
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Nº de nascidos mortos:</th>
                <td colspan="3">'.$aux["nascidosM"].'</td>
              </tr>'; 
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum parto prematuro?</th>
                <td colspan="3">'.$aux["partoP"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum parto normal?</th>
                <td colspan="3">'.$aux["partoN"].'</td>
              </tr>'; 
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum parto cesárea?</th>
                <td colspan="3">'.$aux["partoC"].'</td>
              </tr>';    
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum aborto espontâneo?</th>
                <td colspan="3">'.$aux["aborto"].'</td>
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