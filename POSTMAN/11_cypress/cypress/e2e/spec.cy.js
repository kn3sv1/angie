// describe('template spec', () => {
//   it('passes', () => {
//     cy.visit('https://example.cypress.io')
//   })
// })
// Positive test case
// describe('My First Test from Angie', () => {
//   it('Does not do much!', () => {
//     expect(true).to.equal(true)
//   })
// })

describe('COMPARE NAMES', () => {
  it('Roma is ROMA!', () => {
    expect('Roma').to.equal('Roma')
  })
});

describe('COMPARE NAMES + SURNAME', () => {
  it('Angie is Angie!', () => {
    expect('Angie Neophytou').to.equal('Angie Neophytou');
    expect('Angie Neophytou').not.to.equal('Roman Satanovskyi');
  })
});

// Possitive test case
describe('ES6 style', () => {
  it('Roma is malaka!', () => {
    expect(true).to.equal(true)
  })
});



function angie() {
  it('Anggela is malaka!', function() {
    expect(true).to.equal(true)
  })
}

describe('old school', angie);