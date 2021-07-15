# Random Quote Creator

This module creates a random quote machine with user added quotes. 

## Feature to create:
As a user I would like to be able to select quote nodes to appear in a random quote block. I should be able to pick from existing quotes added.

Quote node:
Should have a text area (body) and an author / attribution field (plain text). Both these fields are required. I can tag my quote with a genre taxonomy term. The quote config should be exported and commited.

Quote block should be a block plugin that has a form on it for selecting nodes of type "quote" and use the entity_autocomplete form widget. This is used to populate the random quote options.

It is important to the client that for the random quotes, no quotes with "camels" in the title be in the random quote block. NO CAMELS!

These quotes should be passed into the existing JS tool built through twig variables.

When a user clicks the quote button, one of the chose quotes appears at random.