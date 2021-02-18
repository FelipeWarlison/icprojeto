 <?php

       // Definimos o nome do arquivo que será exportado
    $arquivo = 'ESCALA DE SONOLÊNCIA DE EPWORTH (ESS-BR).xls';

        $idade1 = $aux['idade'];
        $essbr1 = $aux['essbr1'];
        $essbr2 = $aux['essbr2'];
        $essbr3 = $aux['essbr3'];
        $essbr4 = $aux['essbr4'];
        $essbr5 = $aux['essbr5'];
        $essbr6 = $aux['essbr6'];
        $essbr7 = $aux['essbr7'];
        $essbr8 = $aux['essbr8'];

        // Criamos uma tabela HTML com o formato da planilha
    $html = '';
    $html .= '<table border="1">';

    $html .= '<tr>';
    $html .= '<th align=center colspan="6">LAUDO DA ESCALA DE SONOLÊNCIA DE EPWORTH (ESS-BR)</tr>';
    $html .= '</tr>';
    $html .= '<tr>
                   <th align=left colspan="6">DADOS PESSOAIS:<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">Paciente: '.$aux1["nome"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">Idade: '.$aux["idade"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">Data do Exame: '.$aux["data"].'<\th>
              </tr>';

     $html .= '<tr>
               <th colspan="4" scope="row">Probabilidade</th>
               <th colspan="2" scope="row">Conclusão</th>
              </tr>';
    $html .= '<tr>
                <th colspan="4" scope="row">Sentando e lendo</th>
                    <td colspan="2">'.$aux["essbr1"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Assistindo TV</th>
                    <td colspan="2">'.$aux["essbr2"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Sentado, quieto, em um lugar público por exemplo: (teatro, reunião, palestra, etc...)</th>
                <td colspan="2">'.$aux["essbr3"].'</td>
                </tr>';
    $html .= '<tr>
                <th colspan="4" align=left scope="row">Andando de carro por uma hora sem parar, como passageiro</th>
                <td colspan="2">'.$aux["essbr4"].'</td>
              </tr>';
    $html .= '<tr>
                <th colspan="4" align=left scope="row">Ao deitar-se à tarde para descansar, quando possível</th>
                <td colspan="2">'.$aux["essbr5"].'</td>
              </tr>';
    $html .= '<tr>
                <th colspan="4" align=2 scope="row">Sentado conversando com alguém</th>
                <td colspan="2">'.$aux["essbr6"].'</td>
              </tr>';
    $html .= '<tr>
                <th colspan="4" align=left scope="row">Sentado quieto após o almoço sem bebida alcoólicas</th>
                <td colspan="2">'.$aux["essbr7"].'</td>
              </tr>';
    $html .= '<tr>
                <th colspan="4" align=left scope="row">Em um carro parado no trânsito por alguns minutos</th>
                <td colspan="2">'.$aux["essbr7"].'</td>
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