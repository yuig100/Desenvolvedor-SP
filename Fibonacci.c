#include <stdio.h>

int fibonacci(int n) {
  if (n <= 1) {
    return n;
  }
  return fibonacci(n - 1) + fibonacci(n - 2);
}

int main() {
  int num, i, pertence = 0;
  printf("Digite um número: ");
  scanf("%d", &num);

  for (i = 0; i <= num; i++) {
    if (num == fibonacci(i)) {
      pertence = 1;
      break;
    }
  }

  if (pertence) {
    printf("%d pertence à sequência de Fibonacci.\n", num);
  } else {
    printf("%d não pertence à sequência de Fibonacci.\n", num);
  }

  return 0;
}
