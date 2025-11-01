# Merge Sort - Implementação em PHP

Implementação do algoritmo de ordenação Merge Sort em PHP, criado para Jeronimo Noleto.

## Sobre o Merge Sort

O **Merge Sort** é um algoritmo de ordenação eficiente que utiliza a estratégia de **dividir para conquistar** (divide and conquer). Ele funciona dividindo recursivamente o array em duas metades até que cada subarray tenha apenas um elemento, e então mescla esses subarrays de volta de forma ordenada.

### Características

- **Complexidade de tempo**: O(n log n) em todos os casos (melhor, médio e pior)
- **Complexidade de espaço**: O(n)
- **Estável**: Mantém a ordem relativa de elementos iguais
- **Não é in-place**: Requer espaço adicional para armazenar os subarrays

### Vantagens

✅ Desempenho consistente O(n log n) independentemente da entrada  
✅ Estável (mantém a ordem de elementos iguais)  
✅ Previsível e confiável  
✅ Funciona bem com grandes volumes de dados  
✅ Pode ser paralelizado  

### Desvantagens

❌ Requer espaço adicional O(n)  
❌ Mais lento que Quick Sort na prática para arrays pequenos  

## Como Usar

### Executar o arquivo de demonstração

```bash
php merge_sort.php
```

Este comando executará vários exemplos demonstrando o funcionamento do algoritmo com diferentes tipos de arrays.

### Usar a função no seu código

```php
<?php
// Incluir o arquivo
require_once 'merge_sort.php';

// Criar um array para ordenar
$meuArray = [64, 34, 25, 12, 22, 11, 90];

// Ordenar o array
$arrayOrdenado = mergeSort($meuArray);

// Exibir resultado
print_r($arrayOrdenado);
?>
```

## Estrutura do Código

O arquivo `merge_sort.php` contém:

1. **`mergeSort($array)`**: Função principal que divide recursivamente o array
2. **`merge($esquerda, $direita)`**: Função auxiliar que mescla dois arrays ordenados
3. **`exibirArray($array, $label)`**: Função auxiliar para exibir arrays formatados
4. **Exemplos de demonstração**: 7 exemplos diferentes mostrando o algoritmo em ação

## Como Funciona

### Passo a Passo

1. **Divisão**: O array é dividido em duas metades recursivamente até que cada subarray tenha apenas 1 elemento
2. **Conquista**: Arrays de 1 elemento já estão ordenados por definição
3. **Combinação**: Os subarrays são mesclados de volta em ordem crescente

### Exemplo Visual

```
Array original: [38, 27, 43, 3]

Divisão:
[38, 27, 43, 3]
    ↓
[38, 27]  [43, 3]
    ↓         ↓
[38] [27]  [43] [3]

Mesclagem:
[38] [27]  [43] [3]
    ↓         ↓
[27, 38]  [3, 43]
    ↓
[3, 27, 38, 43]
```

## Exemplos Incluídos

O arquivo demonstra o algoritmo com:

1. Números inteiros desordenados
2. Array já ordenado
3. Array em ordem decrescente
4. Array com números repetidos
5. Array com números negativos
6. Array pequeno (3 elementos)
7. Array com um único elemento

## Requisitos

- PHP 7.0 ou superior

## Autor

Implementação criada para **Jeronimo Noleto**

## Licença

Este código é de uso livre para fins educacionais.