// // Possitive test case
// describe('ES6 style 2026', () => {
//   it('Roma is malaka!', () => {
//     expect(true).to.equal(true)
//   })
// });

describe('My First Test', () => {
  it('Visits the Kitchen Sink', () => {
    cy.visit('https://example.cypress.io');

    // cy.contains('Commands drive your tests in the browser like a real user would.');
    cy.contains("type").click();

    // Should be on a new URL which
    // includes '/commands/actions'
    cy.url().should('include', '/commands/actions')

    // Get an input, type into it
    cy.get('.action-email').type('fake123@email.com')

    //  Verify that the value has been updated
    cy.get('.action-email').should('have.value', 'fake123@email.com')

    const fakeEmail = 'angieneo@email.com';

    // https://docs.cypress.io/api/commands/clear
    cy.get('.action-email').clear();

    // Get an input, type into it
    cy.get('.action-email').type(fakeEmail);

    //  Verify that the value has been updated
    cy.get('.action-email').should('have.value', fakeEmail);
  });
});