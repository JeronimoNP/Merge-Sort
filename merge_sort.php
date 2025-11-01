<?php
/**
 * Implementação do algoritmo Merge Sort
 * Criado para Jeronimo Noleto
 * 
 * O Merge Sort é um algoritmo de ordenação eficiente que utiliza
 * a técnica de dividir para conquistar (divide and conquer).
 * Complexidade de tempo: O(n log n) em todos os casos
 * Complexidade de espaço: O(n)
 */

/**
 * Função principal do Merge Sort
 * 
 * Esta função divide recursivamente o array em duas metades até que
 * cada subarray tenha apenas um elemento, e então mescla esses subarrays
 * de forma ordenada.
 * 
 * @param array $array Array a ser ordenado
 * @return array Array ordenado em ordem crescente
 */
function mergeSort($array) {
    // Caso base: se o array tem 0 ou 1 elemento, já está ordenado
    if (count($array) <= 1) {
        return $array;
    }
    
    // Encontra o índice do meio do array
    $meio = floor(count($array) / 2);
    
    // Divide o array em duas metades
    // A metade esquerda contém elementos do início até o meio
    $esquerda = array_slice($array, 0, $meio);
    
    // A metade direita contém elementos do meio até o fim
    $direita = array_slice($array, $meio);
    
    // Ordena recursivamente cada metade
    // Cada chamada recursiva divide o array até ter apenas 1 elemento
    $esquerda = mergeSort($esquerda);
    $direita = mergeSort($direita);
    
    // Mescla as duas metades ordenadas em um único array ordenado
    return merge($esquerda, $direita);
}

/**
 * Função auxiliar para mesclar dois arrays ordenados
 * 
 * Esta função combina dois arrays já ordenados em um único array
 * mantendo a ordem crescente dos elementos.
 * 
 * @param array $esquerda Array ordenado da esquerda
 * @param array $direita Array ordenado da direita
 * @return array Array mesclado e ordenado
 */
function merge($esquerda, $direita) {
    // Array resultado que conterá os elementos mesclados
    $resultado = [];
    
    // Índices para percorrer os arrays esquerda e direita
    $indiceEsquerda = 0;
    $indiceDireita = 0;
    
    // Armazena o tamanho dos arrays para evitar chamadas repetidas de count()
    $tamanhoEsquerda = count($esquerda);
    $tamanhoDireita = count($direita);
    
    // Enquanto houver elementos em ambos os arrays
    while ($indiceEsquerda < $tamanhoEsquerda && $indiceDireita < $tamanhoDireita) {
        // Compara o elemento atual de cada array
        if ($esquerda[$indiceEsquerda] <= $direita[$indiceDireita]) {
            // Se o elemento da esquerda é menor ou igual, adiciona ao resultado
            $resultado[] = $esquerda[$indiceEsquerda];
            $indiceEsquerda++;
        } else {
            // Se o elemento da direita é menor, adiciona ao resultado
            $resultado[] = $direita[$indiceDireita];
            $indiceDireita++;
        }
    }
    
    // Adiciona os elementos restantes do array esquerda (se houver)
    while ($indiceEsquerda < $tamanhoEsquerda) {
        $resultado[] = $esquerda[$indiceEsquerda];
        $indiceEsquerda++;
    }
    
    // Adiciona os elementos restantes do array direita (se houver)
    while ($indiceDireita < $tamanhoDireita) {
        $resultado[] = $direita[$indiceDireita];
        $indiceDireita++;
    }
    
    // Retorna o array mesclado e ordenado
    return $resultado;
}

/**
 * Função auxiliar para exibir um array de forma formatada
 * 
 * @param array $array Array a ser exibido
 * @param string $label Rótulo descritivo para o array
 */
function exibirArray($array, $label = "Array") {
    echo $label . ": [" . implode(", ", $array) . "]\n";
}

// ==================== EXEMPLOS DE USO ====================

echo "========================================\n";
echo "Demonstração do Merge Sort - Jeronimo Noleto\n";
echo "========================================\n\n";

// Exemplo 1: Array de números inteiros desordenados
echo "Exemplo 1: Números inteiros\n";
echo "----------------------------\n";
$numeros = [64, 34, 25, 12, 22, 11, 90, 88, 45, 50, 30, 17];
exibirArray($numeros, "Array original");
$numerosOrdenados = mergeSort($numeros);
exibirArray($numerosOrdenados, "Array ordenado");
echo "\n";

// Exemplo 2: Array já ordenado (melhor caso)
echo "Exemplo 2: Array já ordenado\n";
echo "----------------------------\n";
$ordenado = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
exibirArray($ordenado, "Array original");
$ordenadoResultado = mergeSort($ordenado);
exibirArray($ordenadoResultado, "Array ordenado");
echo "\n";

// Exemplo 3: Array em ordem decrescente (pior caso para alguns algoritmos)
echo "Exemplo 3: Array em ordem decrescente\n";
echo "--------------------------------------\n";
$decrescente = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
exibirArray($decrescente, "Array original");
$decrescenteOrdenado = mergeSort($decrescente);
exibirArray($decrescenteOrdenado, "Array ordenado");
echo "\n";

// Exemplo 4: Array com números repetidos
echo "Exemplo 4: Array com números repetidos\n";
echo "---------------------------------------\n";
$repetidos = [5, 2, 8, 2, 9, 1, 5, 5, 3, 2];
exibirArray($repetidos, "Array original");
$repetidosOrdenados = mergeSort($repetidos);
exibirArray($repetidosOrdenados, "Array ordenado");
echo "\n";

// Exemplo 5: Array com números negativos
echo "Exemplo 5: Array com números negativos\n";
echo "---------------------------------------\n";
$negativos = [-5, 10, -3, 8, 0, -1, 4, -7, 2];
exibirArray($negativos, "Array original");
$negativosOrdenados = mergeSort($negativos);
exibirArray($negativosOrdenados, "Array ordenado");
echo "\n";

// Exemplo 6: Array pequeno
echo "Exemplo 6: Array pequeno\n";
echo "------------------------\n";
$pequeno = [3, 1, 2];
exibirArray($pequeno, "Array original");
$pequenoOrdenado = mergeSort($pequeno);
exibirArray($pequenoOrdenado, "Array ordenado");
echo "\n";

// Exemplo 7: Array com um único elemento
echo "Exemplo 7: Array com um elemento\n";
echo "---------------------------------\n";
$unico = [42];
exibirArray($unico, "Array original");
$unicoOrdenado = mergeSort($unico);
exibirArray($unicoOrdenado, "Array ordenado");
echo "\n";

echo "========================================\n";
echo "Demonstração concluída com sucesso!\n";
echo "========================================\n";

?>
