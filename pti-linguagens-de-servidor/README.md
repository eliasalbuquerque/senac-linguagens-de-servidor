# PTI - Implementação dos elementos básicos da linguagem PHP


1. A) Crie um arquivo “calculoimc.php”: Neste arquivo conterá o seu programa codificado por você. 

2. B) Este arquivo deve conter a. declare uma função (`function`) para descobrir a faixa do índice de massa corporal (IMC) de um valor IMC informado b. faça a chamada desta função, passando um valor numérico (com 2 casas decimais)

3. C) Esta função deverá receber um valor (IMC que se deseja classificar)

4. D) A função deverá descobrir (classificar) a que faixa IMC o número passado pertence:

- Nesta função deverá ser criado o `Array`, para os seguintes dados

![image-20220905160309906](C:\workspace\senac-linguagens-de-servidor\pti-linguagens-de-servidor\image-20220905160309906.png)

- Deverá percorrer o `Array` para descobrir a que faixa o número recebido pela função pertence.
- Quando a faixa for encontrada deverá ser informado na tela (comando `echo`) a seguinte informação:
  - “Atenção, seu IMC é n, e você está classificado como zzz” 
  - Onde: n = valor recebido no parâmetro e zzz = classificação encontrada
  - Exemplo:
  - Se o valor recebido n = 25.30, será mostrado na tela a mensagem “Atenção, seu IMC é 25.30, e você está classificado com sobrepeso”
