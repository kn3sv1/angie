describe('tasks management', () => {
    it('should open and close the new task model', () => {
        cy.visit('http://localhost:5173/');
        cy.contains('Add Task').click();
        cy.get('.backdrop').click({force:true});
        cy.get('.backdrop').should('not.exist');
        // full power of javascript and variables - create dynamic test cases.
        // for (let i = 0; i < 10; i++) {
        //     let angie = 'not.exist';
        //     cy.get('.backdrop').should(angie);
        // }
        cy.get('.modal').should('not.exist');

        cy.contains('Add Task').click();
        cy.contains('Cancel').click();
        cy.get('.backdrop').should('not.exist');
        cy.get('.modal').should('not.exist');
    })
});