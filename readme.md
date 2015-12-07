## Task

Develop an object-oriented “Hangman” in HTML5, CSS and object oriented Javascript which is playable within a web browser.

## Rules of the game Hangman

In the Hangman game a randomly chosen word or phrase by the computer has to be guessed. The looked for word is made unrecognizable with underlines, the number of underlines is identical to the number of letters in the looked for word.
The guessing of the looked for word is done by manually selecting individual letters of the player, where each letter can only be selected once. The available letters for the word are limited to "A" through "Z" without any special characters. Every rightly guessed letter in the word is uncovered in the entire word at the appropriate position. If a letter guessed by the player is NOT in the looked for word, it is rated as an unsuccessful attempt. A maximum number of 6 unsuccessful attempts is permitted before a game is lost.
The following rules and functions have to be implemented:

The looked for word is randomly selected from a list, which also includes the following words/phrases:
- IQU
- PERFORMANCEMARKETING o GAMEANALYTICS
- HANGMAN
- PEELINGTHEONION
- COHORT ANALYSIS
- GAMEON!


• Only letters from A to Z without special characters are selectable by the player to guess the entire word.

• At the beginning of the game all letters in the word are made unrecognizable with one underline.

• The game is completed successfully if all letters of a word are revealed.

• The game ends after the 6th unsuccessful attempt.

• The game can be restarted after the end.