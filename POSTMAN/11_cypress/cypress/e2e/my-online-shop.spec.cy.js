// // Possitive test case
// describe('ES6 style 2026', () => {
//   it('Roma is malaka!', () => {
//     expect(true).to.equal(true)
//   })
// });

describe('My First Test', () => {
  it('Visits the Kitchen Sink', () => {
    cy.visit('http://localhost:3000/login');

    cy.get('#email').type('testing@test.com');

    cy.get('#password').type('123abcd');
    cy.get('.btn').click();
    cy.url().should('include', '/products');
    cy.contains('A wireless computer mouse')
        .parent('.product-item-content')
        .contains('View & Edit')
        .click();
  });
});