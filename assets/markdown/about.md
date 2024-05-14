## Coca-Cola Journey 3D

The Coca-Cola Journey 3D Web App is a project developed as part of the assessment for the 3D Web Application module at the University of Sussex. Its architecture involves a seamless integration of various technologies:

- **Data Management:**
  - Utilizes SQLite for server-side storage of content such as cards, 3D model pages, and carousels.
  - PHP scripts access the SQLite database and convert data into JSON format for client-side consumption.
  - JavaScript dynamically populates HTML elements with JSON data, providing a smooth user experience.

- **Image Gallery:**
  - PHP scripts parse subdirectories of assets to create JSON arrays containing image files.
  - The client-side lightbox image gallery is populated with images fetched from the JSON array, enhancing visual engagement.

- **About Page:**
  - Employs the Showdown JavaScript library to parse Markdown files, allowing for easy editing and updating of text-heavy sections.
  - HTML content generated from Markdown files provides detailed information about the project and its objectives.

**Usage Instructions**

Navigate to product pages to interact with two models per page. Toggle between can, bottle, and cup tabs to switch between models. In case of model freezing, reloading the page usually resolves the issue.

**Links**

- [Coca-Cola Journey]()
- [GitHub Repository]()
- [3D Models](assets/)

