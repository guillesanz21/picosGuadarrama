tinymce.init({
  selector: "textarea#tinyeditor",
  /* skin: 'oxide-dark',
  content_css: 'dark', */
  plugins: [
    "advlist autolink link image lists charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
    "table emoticons paste help autosave hr imagetools",
  ],
  toolbar:
    "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | " +
    "bullist numlist outdent indent | link image | print preview media fullpage | " +
    "hr forecolor backcolor emoticons | help",
  menubar: "file edit view insert format tools table help",

  // Plugins configuration
  autosave_interval: "30s",
});


/* ################################################# 
   ################# DEFAULT SETUP ################# 
   ################################################# */

/* toolbar:
    "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent",
  menu: {
    file: { title: "File", items: "newdocument restoredraft | preview | print " },
    edit: {
      title: "Edit",
      items: "undo redo | cut copy paste | selectall | searchreplace",
    },
    view: {
      title: "View",
      items:
        "code | visualaid visualchars visualblocks | spellchecker | preview fullscreen",
    },
    insert: {
      title: "Insert",
      items:
        "image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime",
    },
    format: {
      title: "Format",
      items:
        "bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat",
    },
    tools: {
      title: "Tools",
      items: "spellchecker spellcheckerlanguage | code wordcount",
    },
    table: {
      title: "Table",
      items: "inserttable | cell row column | tableprops deletetable",
    },
    help: { title: "Help", items: "help" },
  },
  menubar: "file edit view insert format tools table help", */


/* ################################################# 
   ############## HOW TO CHANGE STYLE ##############
   ################################################# */

//   style_formats: [
//     {
//       title: "Headers",
//       items: [
//         { title: "Header 1", format: "h1" },
//         { title: "Header 2", format: "h2" },
//         { title: "Header 3", format: "h3" },
//         { title: "Header 4", format: "h4" },
//         { title: "Header 5", format: "h5" },
//         { title: "Header 6", format: "h6" },
//       ],
//     },
//     {
//       title: "Inline",
//       items: [
//         { title: "Bold", icon: "bold", format: "bold" },
//         { title: "Italic", icon: "italic", format: "italic" },
//         { title: "Underline", icon: "underline", format: "underline" },
//         { title: "Strikethrough", icon: "strikethrough", format: "strikethrough" },
//         { title: "Superscript", icon: "superscript", format: "superscript" },
//         { title: "Subscript", icon: "subscript", format: "subscript" },
//         { title: "Code", icon: "code", format: "code" },
//       ],
//     },
//     {
//       title: "Blocks",
//       items: [
//         { title: "Paragraph", format: "p" },
//         { title: "Blockquote", format: "blockquote" },
//         { title: "Div", format: "div" },
//         { title: "Pre", format: "pre" },
//       ],
//     },
//     {
//       title: "Alignment",
//       items: [
//         { title: "Left", icon: "alignleft", format: "alignleft" },
//         { title: "Center", icon: "aligncenter", format: "aligncenter" },
//         { title: "Right", icon: "alignright", format: "alignright" },
//         { title: "Justify", icon: "alignjustify", format: "alignjustify" },
//       ],
//     },
//   ],
// });
