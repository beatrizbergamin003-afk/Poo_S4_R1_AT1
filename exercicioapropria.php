 EXERCÍCIOS DE APROPRIAÇÃO

Explique o que é uma interface.

Pensa na interface como um "combinado" no código. Ela serve para editar quais métodos uma classe é obrigada a ter, mas sem colocar nenhuma lógica lá dentro. Na prática, ela define só o que a classe precisa fazer, deixando o como fazer por conta de quem for implementar.

Qual a diferença entre classe abstrata e interface?

Interface: é puramente uma regra de estrutura. Não guarda dados/atributos (como $status ou $volume), não tem código pronto nos métodos e, no PHP, uma mesma classe pode implementar várias interfaces ao mesmo tempo.

Classe Abstrata: Funciona como uma base reutilizável. Ela pode ter atributos, construtor e até métodos com código pronto para evitar repetição. A limitação é que uma classe só pode herdar de uma classe abstrata por vez.


Por que interfaces ajudam no trabalho em equipe?

Porque elas deixam todo mundo alinhado desde o começo. Quando a equipe define a interface antes de fazer o código, pode criar a classe com a regra de negócio enquanto outro já vai montando o restante do sistema. Como o nome das funções e os parâmetros já foram combinados na interface, ninguém fica travado esperando o colega terminar para ver o código funcionar junto.