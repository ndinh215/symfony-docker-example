Feature: Google Says Hello

  Scenario: In order to test the Google Search Input Field
    Given I am on "/"
    When I fill in "q" with "symfony"
    And I press "Google-Suche"
    Then I should see "High Performance"