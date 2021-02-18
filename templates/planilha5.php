<?php

    // Definimos o nome do arquivo que será exportado
    $arquivo = 'TESTE DE ORIENTAÇÃO DE VIDA (TOV-R).xls';

                $idade5 = $aux['idade'];
                $tovr1 = $aux['tovr1'];
                $tovr2 = $aux['tovr2'];
                $tovr3 = $aux['tovr3'];
                $tovr4 = $aux['tovr4'];
                $tovr5 = $aux['tovr5'];
                $tovr6 = $aux['tovr6'];
                $tovr7 = $aux['tovr7'];
                $tovr8 = $aux['tovr8'];
                $tovr9 = $aux['tovr9'];
                $tovr10 = $aux['tovr10'];

    $html = '';
    $html .= '<table border="1">';

    $html .= '<tr>';
    $html .= '<th align=center colspan="6">RESULTADO: TESTE DE ORIENTAÇÃO DE VIDA (TOV-R)</tr>';
    $html .= '</tr>';

    $html .= '<tr>
                   <th align=left colspan="6">DADOS PESSOAIS:<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">PACIENTE: '.$aux1["nome"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">DATA DA CONSULTA: '.$aux["data"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">IDADE: '.$aux["idade"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">RESULTADO<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Diante de dificuldade, acho que tudo vai dar certo:</th>
                <td colspan="2">'.$aux["tovr1"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Para mim é fácil relaxar:</th>
                <td colspan="2">'.$aux["tovr2"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Se alguma coisa pode dar errado comigo, com certeza vai dar errado:</th>
                <td colspan="2">'.$aux["tovr3"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Eu sou sempre otimista com relação ao meu futuro:</th>
                <td colspan="2">'.$aux["tovr4"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Eu gosto muito dos meus amigos e amigas:</th>
                <td colspan="2">'.$aux["tovr5"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Eu considero importante me manter ocupado:</th>
                <td colspan="2">'.$aux["tovr6"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Em geral, eu não espero que as coisas vão dar certo para mim:</th>
                <td colspan="2">'.$aux["tovr7"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Eu não me incomodo com facilidade:</th>
                <td colspan="2">'.$aux["tovr8"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Eu não espero que coisas boas aconteçam comigo:</th>
                <td colspan="2">'.$aux["tovr9"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Em geral, eu espero que aconteçam mais coisas boas do que ruins para mim:</th>
                <td colspan="2">'.$aux["tovr10"].'</td>
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