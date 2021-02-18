<?php

    // Definimos o nome do arquivo que será exportado
    $arquivo = 'THE WORLD HEALTH ORGANIZATION QUALITY OF LIFE (WHOQOL-BREF).xls';

                $idade6 = $aux['idade'];
                $whoqol1 = $aux['whoqol1'];
                $whoqol2 = $aux['whoqol2'];
                $whoqol3 = $aux['whoqol3'];
                $whoqol4 = $aux['whoqol4'];
                $whoqol5 = $aux['whoqol5'];
                $whoqol6 = $aux['whoqol6'];
                $whoqol7 = $aux['whoqol7'];
                $whoqol8 = $aux['whoqol8'];
                $whoqol9 = $aux['whoqol9'];
                $whoqol10 = $aux['whoqol10'];
                $whoqol11 = $aux['whoqol11'];
                $whoqol12 = $aux['whoqol12'];
                $whoqol13 = $aux['whoqol13'];
                $whoqol14 = $aux['whoqol14'];
                $whoqol15 = $aux['whoqol15'];
                $whoqol16 = $aux['whoqol16'];
                $whoqol17 = $aux['whoqol17'];
                $whoqol18 = $aux['whoqol18'];
                $whoqol19 = $aux['whoqol19'];
                $whoqol20 = $aux['whoqol20'];
                $whoqol21 = $aux['whoqol21'];
                $whoqol22 = $aux['whoqol22'];
                $whoqol23 = $aux['whoqol23'];
                $whoqol24 = $aux['whoqol24'];
                $whoqol25 = $aux['whoqol25'];
                $whoqol26 = $aux['whoqol26'];
                $ajuda = $aux['ajuda'];
                $tempo = $aux['tempo'];
                $comentario = $aux['comentario'];
         
    $html = '';
    $html .= '<table border="1">';

    $html .= '<tr>';
    $html .= '<th align=center colspan="6">RESULTADO: THE WORLD HEALTH ORGANIZATION QUALITY OF LIFE (WHOQOL-BREF)
</tr>';
    $html .= '</tr>';

    $html .= '<tr>
                   <th align=left colspan="6">DADOS PESSOAIS:<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">PACIENTE: '.$aux1["nome"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">DATA DO EXAME: '.$aux["data"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">IDADE: '.$aux["idade"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">RESULTADO<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Como você avaliaria sua qualidade de vida?</th>
                <td colspan="1">'.$aux["whoqol1"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com a sua saúde?</th>
                <td colspan="1">'.$aux["whoqol2"].'</td>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">As respostas seguintes são sobre o quanto você tem sentido algumas coisas nas últimas duas semanas.<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Em que medida você acha que sua dor (física) impede você de fazer o que você precisa?</th>
                <td colspan="1">'.$aux["whoqol3"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">O quanto você precisa de algum tratamento médico para levar sua vida diária?</th>
                <td colspan="1">'.$aux["whoqol4"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">O quanto você aproveita a vida?</th>
                <td colspan="1">'.$aux["whoqol5"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Em que medida você acha que a sua vida tem sentido?</th>
                <td colspan="1">'.$aux["whoqol6"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">O quanto você consegue se concentrar?</th>
                <td colspan="1">'.$aux["whoqol7"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão segura você se sente em sua vida diária?</th>
                <td colspan="1">'.$aux["whoqol8"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão saudável é o seu ambiente físico (clima, barulho, poluição, atrativos)?</th>
                <td colspan="1">'.$aux["whoqol9"].'</td>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">As Respostas seguintes perguntam sobre quão completamente você tem sentido ou é capaz de fazer certas coisas nestas últimas duas semanas.<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Você tem energia suficiente para seu dia-a-dia?</th>
                <td colspan="1">'.$aux["whoqol10"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Você é capaz de aceitar sua aparência física?</th>
                <td colspan="1">'.$aux["whoqol11"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Você tem dinheiro suficiente para satisfazer suas necessidades?</th>
                <td colspan="1">'.$aux["whoqol12"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão disponíveis para você estão as informações que precisa no seu dia-a-dia?</th>
                <td colspan="1">'.$aux["whoqol13"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Em que medida você tem oportunidades de atividade de lazer?</th>
                <td colspan="1">'.$aux["whoqol14"].'</td>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">As respostas seguintes perguntam sobre quão bem ou satisfeito você se sentiu a respeito de vários aspectos de sua vida nas últimas duas semanas.<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão bem você é capaz de se locomover?</th>
                <td colspan="1">'.$aux["whoqol15"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com o seu sono?</th>
                <td colspan="1">'.$aux["whoqol16"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com sua capacidade para o trabalho?</th>
                <td colspan="1">'.$aux["whoqol17"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está consigo mesmo?</th>
                <td colspan="1">'.$aux["whoqol18"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com suas relações pessoais (amigos, parentes, conhecidos, colegas)?</th>
                <td colspan="1">'.$aux["whoqol19"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com sua vida sexual?</th>
                <td colspan="1">'.$aux["whoqol20"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com o apoio que você recebe de seus amigos?</th>
                <td colspan="1">'.$aux["whoqol21"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com as condições do local onde mora?</th>
                <td colspan="1">'.$aux["whoqol22"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com o seu acesso aos serviços de saúde?</th>
                <td colspan="1">'.$aux["whoqol23"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com o seu meio de transporte?</th>
                <td colspan="1">'.$aux["whoqol24"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com o seu meio de transporte?</th>
                <td colspan="1">'.$aux["whoqol25"].'</td>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">A resposta seguinte referem-se a com que freqüência você sentiu ou experimentou certas coisas nas últimas duas semanas.<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Com que freqüência você tem sentimentos negativos tais como mau humor, desespero, ansiedade, depressão?</th>
                <td colspan="1">'.$aux["whoqol26"].'</td>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">Avalie como foi a realização deste questionário.<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Alguém lhe ajudou a preencher este questionário?</th>
                <td colspan="1">'.$aux["ajuda"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quanto tempo você levou para preencher este questionário?</th>
                <td colspan="1">'.$aux["tempo"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Você tem algum comentário sobre o questionário? (opcional)</th>
                <td colspan="1">'.$aux["comentario"].'</td>
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