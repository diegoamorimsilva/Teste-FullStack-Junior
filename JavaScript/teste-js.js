const pessoas = [
  {
    nome: "Rafael",
    idade: 30
  },
  {
    nome: "Ambrosina",
    idade: 87
  },
  {
    nome: "José",
    idade: 25
  },
  {
    nome: "André",
    idade: 23
  },
  {
    nome: "Brenda",
    idade: 23
  },
  {
    nome: "Carlinhos",
    idade: "27"
  },
  {
    nome: "Nivea",
    idade: 19
  },
  {
    nome: "Jaison",
    idade: 34
  },
  {
    nome: "Adriana",
    idade: 28
  },
  {
    nome: "Edenilson",
    idade: 33
  },
  {
    nome: "Claudio",
    idade: 16
  },
  {
    nome: "Flavia",
    idade: 32
  },
  {
    nome: "Bruno",
    idade: 28
  },
  {
    nome: "Marcia",
    idade: 24
  }
];

// Divide os nomes por paridade do atributo idade
let separarPorIdade = async function(pessoas) {
  let nomesIdadePar = [];
  let nomesIdadeImpar = [];
  for (let i = 0; i < pessoas.length; i++) {
    if (pessoas[i].idade % 2 == 0) {
      nomesIdadePar.push(pessoas[i].nome);
    } else {
      nomesIdadeImpar.push(pessoas[i].nome);
    }
  }
  return {
    nomesIdadePar,
    nomesIdadeImpar
  };
};

//Resposta
separarPorIdade(pessoas).then((resposta) => {
  console.log(`Nomes em nomesIdadePar: ${resposta.nomesIdadePar.length}`);
  console.log(`Nomes em nomesIdadeImpar: ${resposta.nomesIdadeImpar.length}`);
  console.log(`Nomes em nomesIdadePar: ${resposta.nomesIdadePar.sort()}`);
  console.log(`Nomes em nomesIdadeImpar: ${resposta.nomesIdadeImpar.sort()}`);
});