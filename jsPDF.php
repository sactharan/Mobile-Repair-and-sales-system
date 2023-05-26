<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>jsPDF - Documentation</title>
    
    
    <script src="scripts/prettify/prettify.js"></script>
    <script src="scripts/prettify/lang-css.js"></script>
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link type="text/css" rel="stylesheet" href="styles/prettify.css">
    <link type="text/css" rel="stylesheet" href="styles/jsdoc.css">
    <script src="scripts/nav.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger" class="navicon-button x">
  <div class="navicon"></div>
</label>

<label for="nav-trigger" class="overlay"></label>

<nav >
    
    <h2><a href="index.html">Home</a></h2><h3>Classes</h3><ul><li><a href="GState.html">GState</a></li><li><a href="jsPDF.html">jsPDF</a><ul class='methods'><li data-type='method'><a href="jsPDF.html#addFont">addFont</a></li><li data-type='method'><a href="jsPDF.html#addGState">addGState</a></li><li data-type='method'><a href="jsPDF.html#addPage">addPage</a></li><li data-type='method'><a href="jsPDF.html#addPattern">addPattern</a></li><li data-type='method'><a href="jsPDF.html#beginFormObject">beginFormObject</a></li><li data-type='method'><a href="jsPDF.html#circle">circle</a></li><li data-type='method'><a href="jsPDF.html#clip">clip</a></li><li data-type='method'><a href="jsPDF.html#clipEvenOdd">clipEvenOdd</a></li><li data-type='method'><a href="jsPDF.html#close">close</a></li><li data-type='method'><a href="jsPDF.html#comment">comment</a></li><li data-type='method'><a href="jsPDF.html#curveTo">curveTo</a></li><li data-type='method'><a href="jsPDF.html#deletePage">deletePage</a></li><li data-type='method'><a href="jsPDF.html#discardPath">discardPath</a></li><li data-type='method'><a href="jsPDF.html#doFormObject">doFormObject</a></li><li data-type='method'><a href="jsPDF.html#ellipse">ellipse</a></li><li data-type='method'><a href="jsPDF.html#endFormObject">endFormObject</a></li><li data-type='method'><a href="jsPDF.html#fill">fill</a></li><li data-type='method'><a href="jsPDF.html#fillEvenOdd">fillEvenOdd</a></li><li data-type='method'><a href="jsPDF.html#fillStroke">fillStroke</a></li><li data-type='method'><a href="jsPDF.html#fillStrokeEvenOdd">fillStrokeEvenOdd</a></li><li data-type='method'><a href="jsPDF.html#getCharSpace">getCharSpace</a></li><li data-type='method'><a href="jsPDF.html#getCreationDate">getCreationDate</a></li><li data-type='method'><a href="jsPDF.html#getDrawColor">getDrawColor</a></li><li data-type='method'><a href="jsPDF.html#getFileId">getFileId</a></li><li data-type='method'><a href="jsPDF.html#getFillColor">getFillColor</a></li><li data-type='method'><a href="jsPDF.html#getFont">getFont</a></li><li data-type='method'><a href="jsPDF.html#getFontList">getFontList</a></li><li data-type='method'><a href="jsPDF.html#getFontSize">getFontSize</a></li><li data-type='method'><a href="jsPDF.html#getFormObject">getFormObject</a></li><li data-type='method'><a href="jsPDF.html#getLineHeightFactor">getLineHeightFactor</a></li><li data-type='method'><a href="jsPDF.html#getLineWidth">getLineWidth</a></li><li data-type='method'><a href="jsPDF.html#getR2L">getR2L</a></li><li data-type='method'><a href="jsPDF.html#getTextColor">getTextColor</a></li><li data-type='method'><a href="jsPDF.html#insertPage">insertPage</a></li><li data-type='method'><a href="jsPDF.html#line">line</a></li><li data-type='method'><a href="jsPDF.html#lines">lines</a></li><li data-type='method'><a href="jsPDF.html#lineTo">lineTo</a></li><li data-type='method'><a href="jsPDF.html#movePage">movePage</a></li><li data-type='method'><a href="jsPDF.html#moveTo">moveTo</a></li><li data-type='method'><a href="jsPDF.html#output">output</a></li><li data-type='method'><a href="jsPDF.html#path">path</a></li><li data-type='method'><a href="jsPDF.html#rect">rect</a></li><li data-type='method'><a href="jsPDF.html#restoreGraphicsState">restoreGraphicsState</a></li><li data-type='method'><a href="jsPDF.html#roundedRect">roundedRect</a></li><li data-type='method'><a href="jsPDF.html#save">save</a></li><li data-type='method'><a href="jsPDF.html#saveGraphicsState">saveGraphicsState</a></li><li data-type='method'><a href="jsPDF.html#setCharSpace">setCharSpace</a></li><li data-type='method'><a href="jsPDF.html#setCreationDate">setCreationDate</a></li><li data-type='method'><a href="jsPDF.html#setCurrentTransformationMatrix">setCurrentTransformationMatrix</a></li><li data-type='method'><a href="jsPDF.html#setDisplayMode">setDisplayMode</a></li><li data-type='method'><a href="jsPDF.html#setDocumentProperties">setDocumentProperties</a></li><li data-type='method'><a href="jsPDF.html#setDrawColor">setDrawColor</a></li><li data-type='method'><a href="jsPDF.html#setFileId">setFileId</a></li><li data-type='method'><a href="jsPDF.html#setFillColor">setFillColor</a></li><li data-type='method'><a href="jsPDF.html#setFont">setFont</a></li><li data-type='method'><a href="jsPDF.html#setFontSize">setFontSize</a></li><li data-type='method'><a href="jsPDF.html#setGState">setGState</a></li><li data-type='method'><a href="jsPDF.html#setLineCap">setLineCap</a></li><li data-type='method'><a href="jsPDF.html#setLineDashPattern">setLineDashPattern</a></li><li data-type='method'><a href="jsPDF.html#setLineHeightFactor">setLineHeightFactor</a></li><li data-type='method'><a href="jsPDF.html#setLineJoin">setLineJoin</a></li><li data-type='method'><a href="jsPDF.html#setLineMiterLimit">setLineMiterLimit</a></li><li data-type='method'><a href="jsPDF.html#setLineWidth">setLineWidth</a></li><li data-type='method'><a href="jsPDF.html#setPage">setPage</a></li><li data-type='method'><a href="jsPDF.html#setPrecision">setPrecision</a></li><li data-type='method'><a href="jsPDF.html#setR2L">setR2L</a></li><li data-type='method'><a href="jsPDF.html#setTextColor">setTextColor</a></li><li data-type='method'><a href="jsPDF.html#stroke">stroke</a></li><li data-type='method'><a href="jsPDF.html#text">text</a></li><li data-type='method'><a href="jsPDF.html#triangle">triangle</a></li><li data-type='method'><a href="jsPDF.html#~addGState">addGState</a></li><li data-type='method'><a href="jsPDF.html#~addPattern">addPattern</a></li><li data-type='method'><a href="jsPDF.html#~hasHotfix">hasHotfix</a></li><li data-type='method'><a href="jsPDF.html#~Point">Point</a></li><li data-type='method'><a href="jsPDF.html#~Rectangle">Rectangle</a></li><li data-type='method'><a href="jsPDF.html#~RenderTarget">RenderTarget</a></li></ul></li><li><a href="jsPDF-API.GState.html">GState</a></li><li><a href="jsPDF-API.ShadingPattern.html">ShadingPattern</a></li><li><a href="jsPDF-API.TilingPattern.html">TilingPattern</a></li><li><a href="Matrix.html">Matrix</a><ul class='methods'><li data-type='method'><a href="Matrix.html#applyToPoint">applyToPoint</a></li><li data-type='method'><a href="Matrix.html#applyToRectangle">applyToRectangle</a></li><li data-type='method'><a href="Matrix.html#clone">clone</a></li><li data-type='method'><a href="Matrix.html#decompose">decompose</a></li><li data-type='method'><a href="Matrix.html#inversed">inversed</a></li><li data-type='method'><a href="Matrix.html#join">join</a></li><li data-type='method'><a href="Matrix.html#multiply">multiply</a></li><li data-type='method'><a href="Matrix.html#toString">toString</a></li></ul></li><li><a href="module-AcroForm-AcroFormButton.html">AcroFormButton</a></li><li><a href="module-AcroForm-AcroFormCheckBox.html">AcroFormCheckBox</a></li><li><a href="module-AcroForm-AcroFormChoiceField.html">AcroFormChoiceField</a></li><li><a href="module-AcroForm-AcroFormComboBox.html">AcroFormComboBox</a><ul class='methods'><li data-type='method'><a href="module-AcroForm-AcroFormComboBox.html#addOption">addOption</a></li><li data-type='method'><a href="module-AcroForm-AcroFormComboBox.html#getOptions">getOptions</a></li><li data-type='method'><a href="module-AcroForm-AcroFormComboBox.html#removeOption">removeOption</a></li><li data-type='method'><a href="module-AcroForm-AcroFormComboBox.html#setOptions">setOptions</a></li></ul></li><li><a href="module-AcroForm-AcroFormEditBox.html">AcroFormEditBox</a><ul class='methods'><li data-type='method'><a href="module-AcroForm-AcroFormEditBox.html#addOption">addOption</a></li><li data-type='method'><a href="module-AcroForm-AcroFormEditBox.html#getOptions">getOptions</a></li><li data-type='method'><a href="module-AcroForm-AcroFormEditBox.html#removeOption">removeOption</a></li><li data-type='method'><a href="module-AcroForm-AcroFormEditBox.html#setOptions">setOptions</a></li></ul></li><li><a href="module-AcroForm-AcroFormField.html">AcroFormField</a></li><li><a href="module-AcroForm-AcroFormListBox.html">AcroFormListBox</a><ul class='methods'><li data-type='method'><a href="module-AcroForm-AcroFormListBox.html#addOption">addOption</a></li><li data-type='method'><a href="module-AcroForm-AcroFormListBox.html#getOptions">getOptions</a></li><li data-type='method'><a href="module-AcroForm-AcroFormListBox.html#removeOption">removeOption</a></li><li data-type='method'><a href="module-AcroForm-AcroFormListBox.html#setOptions">setOptions</a></li></ul></li><li><a href="module-AcroForm-AcroFormPasswordField.html">AcroFormPasswordField</a></li><li><a href="module-AcroForm-AcroFormPDFObject.html">AcroFormPDFObject</a></li><li><a href="module-AcroForm-AcroFormPushButton.html">AcroFormPushButton</a></li><li><a href="module-AcroForm-AcroFormRadioButton.html">AcroFormRadioButton</a></li><li><a href="module-AcroForm-AcroFormTextField.html">AcroFormTextField</a></li><li><a href="module-canvas-Canvas.html">Canvas</a></li></ul><h3>Modules</h3><ul><li><a href="module-AcroForm.html">AcroForm</a><ul class='methods'><li data-type='method'><a href="module-AcroForm.html#addField">addField</a></li><li data-type='method'><a href="module-AcroForm.html#~AcroFormDictionaryCallback">AcroFormDictionaryCallback</a></li><li data-type='method'><a href="module-AcroForm.html#~calculateFontSpace">calculateFontSpace</a></li><li data-type='method'><a href="module-AcroForm.html#~createAnnotationReference">createAnnotationReference</a></li><li data-type='method'><a href="module-AcroForm.html#~createFieldCallback">createFieldCallback</a></li></ul></li><li><a href="module-addImage.html">addImage</a><ul class='methods'><li data-type='method'><a href="module-addImage.html#~addImage">addImage</a></li><li data-type='method'><a href="module-addImage.html#~arrayBufferToBinaryString">arrayBufferToBinaryString</a></li><li data-type='method'><a href="module-addImage.html#~binaryStringToUint8Array">binaryStringToUint8Array</a></li><li data-type='method'><a href="module-addImage.html#~convertBase64ToBinaryString">convertBase64ToBinaryString</a></li><li data-type='method'><a href="module-addImage.html#~extractImageFromDataUrl">extractImageFromDataUrl</a></li><li data-type='method'><a href="module-addImage.html#~getImageFileTypeByImageData">getImageFileTypeByImageData</a></li><li data-type='method'><a href="module-addImage.html#~getImageProperties">getImageProperties</a></li><li data-type='method'><a href="module-addImage.html#~isArrayBuffer">isArrayBuffer</a></li><li data-type='method'><a href="module-addImage.html#~isArrayBufferView">isArrayBufferView</a></li><li data-type='method'><a href="module-addImage.html#~sHashCode">sHashCode</a></li><li data-type='method'><a href="module-addImage.html#~supportsArrayBuffer">supportsArrayBuffer</a></li><li data-type='method'><a href="module-addImage.html#~validateStringAsBase64">validateStringAsBase64</a></li></ul></li><li><a href="module-annotations.html">annotations</a><ul class='methods'><li data-type='method'><a href="module-annotations.html#~createAnnotation">createAnnotation</a></li><li data-type='method'><a href="module-annotations.html#~getTextWidth">getTextWidth</a></li><li data-type='method'><a href="module-annotations.html#~link">link</a></li><li data-type='method'><a href="module-annotations.html#~textWithLink">textWithLink</a></li></ul></li><li><a href="module-arabic.html">arabic</a><ul class='methods'><li data-type='method'><a href="module-arabic.html#~processArabic">processArabic</a></li></ul></li><li><a href="module-autoprint.html">autoprint</a><ul class='methods'><li data-type='method'><a href="module-autoprint.html#~autoPrint">autoPrint</a></li></ul></li><li><a href="module-bmp_support.html">bmp_support</a></li><li><a href="module-canvas.html">canvas</a><ul class='methods'><li data-type='method'><a href="module-canvas.html#~getContext">getContext</a></li><li data-type='method'><a href="module-canvas.html#~toDataURL">toDataURL</a></li></ul></li><li><a href="module-cell.html">cell</a><ul class='methods'><li data-type='method'><a href="module-cell.html#~cell">cell</a></li><li data-type='method'><a href="module-cell.html#~cellAddPage">cellAddPage</a></li><li data-type='method'><a href="module-cell.html#~getTextDimensions">getTextDimensions</a></li><li data-type='method'><a href="module-cell.html#~printHeaderRow">printHeaderRow</a></li><li data-type='method'><a href="module-cell.html#~setHeaderFunction">setHeaderFunction</a></li><li data-type='method'><a href="module-cell.html#~setTableHeaderRow">setTableHeaderRow</a></li><li data-type='method'><a href="module-cell.html#~table">table</a></li></ul></li><li><a href="module-context2d.html">context2d</a><ul class='methods'><li data-type='method'><a href="module-context2d.html#~arc">arc</a></li><li data-type='method'><a href="module-context2d.html#~arcTo">arcTo</a></li><li data-type='method'><a href="module-context2d.html#~beginPath">beginPath</a></li><li data-type='method'><a href="module-context2d.html#~bezierCurveTo">bezierCurveTo</a></li><li data-type='method'><a href="module-context2d.html#~clearRect">clearRect</a></li><li data-type='method'><a href="module-context2d.html#~clip">clip</a></li><li data-type='method'><a href="module-context2d.html#~closePath">closePath</a></li><li data-type='method'><a href="module-context2d.html#~createArc">createArc</a></li><li data-type='method'><a href="module-context2d.html#~fillRect">fillRect</a></li><li data-type='method'><a href="module-context2d.html#~fillText">fillText</a></li><li data-type='method'><a href="module-context2d.html#~getLineDash">getLineDash</a></li><li data-type='method'><a href="module-context2d.html#~lineTo">lineTo</a></li><li data-type='method'><a href="module-context2d.html#~measureText">measureText</a></li><li data-type='method'><a href="module-context2d.html#~moveTo">moveTo</a></li><li data-type='method'><a href="module-context2d.html#~quadraticCurveTo">quadraticCurveTo</a></li><li data-type='method'><a href="module-context2d.html#~rect">rect</a></li><li data-type='method'><a href="module-context2d.html#~restore">restore</a></li><li data-type='method'><a href="module-context2d.html#~rotate">rotate</a></li><li data-type='method'><a href="module-context2d.html#~save">save</a></li><li data-type='method'><a href="module-context2d.html#~scale">scale</a></li><li data-type='method'><a href="module-context2d.html#~setLineDash">setLineDash</a></li><li data-type='method'><a href="module-context2d.html#~setTransform">setTransform</a></li><li data-type='method'><a href="module-context2d.html#~stroke">stroke</a></li><li data-type='method'><a href="module-context2d.html#~strokeRect">strokeRect</a></li><li data-type='method'><a href="module-context2d.html#~strokeText">strokeText</a></li><li data-type='method'><a href="module-context2d.html#~toDataURL">toDataURL</a></li><li data-type='method'><a href="module-context2d.html#~transform">transform</a></li><li data-type='method'><a href="module-context2d.html#~translate">translate</a></li></ul></li><li><a href="module-fileloading.html">fileloading</a><ul class='methods'><li data-type='method'><a href="module-fileloading.html#~loadFile">loadFile</a></li><li data-type='method'><a href="module-fileloading.html#~loadImageFile">loadImageFile</a></li></ul></li><li><a href="module-gif_support.html">gif_support</a></li><li><a href="module-html.html">html</a><ul class='methods'><li data-type='method'><a href="module-html.html#~html">html</a></li></ul></li><li><a href="module-javascript.html">javascript</a><ul class='methods'><li data-type='method'><a href="module-javascript.html#~addJS">addJS</a></li></ul></li><li><a href="module-jpeg_support.html">jpeg_support</a></li><li><a href="module-outline.html">outline</a></li><li><a href="module-png_support.html">png_support</a></li><li><a href="module-rgba_support.html">rgba_support</a></li><li><a href="module-setLanguage.html">setLanguage</a><ul class='methods'><li data-type='method'><a href="module-setLanguage.html#~setLanguage">setLanguage</a></li></ul></li><li><a href="module-split_text_to_size.html">split_text_to_size</a><ul class='methods'><li data-type='method'><a href="module-split_text_to_size.html#~getCharWidthsArray">getCharWidthsArray</a></li><li data-type='method'><a href="module-split_text_to_size.html#~getStringUnitWidth">getStringUnitWidth</a></li><li data-type='method'><a href="module-split_text_to_size.html#~splitTextToSize">splitTextToSize</a></li></ul></li><li><a href="module-standard_fonts_metrics.html">standard_fonts_metrics</a></li><li><a href="module-svg.html">svg</a><ul class='methods'><li data-type='method'><a href="module-svg.html#~addSvgAsImage">addSvgAsImage</a></li></ul></li><li><a href="module-total_pages.html">total_pages</a><ul class='methods'><li data-type='method'><a href="module-total_pages.html#~putTotalPages">putTotalPages</a></li></ul></li><li><a href="module-ttfsupport.html">ttfsupport</a></li><li><a href="module-utf8.html">utf8</a></li><li><a href="module-vFS.html">vFS</a><ul class='methods'><li data-type='method'><a href="module-vFS.html#~addFileToVFS">addFileToVFS</a></li><li data-type='method'><a href="module-vFS.html#~existsFileInVFS">existsFileInVFS</a></li><li data-type='method'><a href="module-vFS.html#~getFileFromVFS">getFileFromVFS</a></li></ul></li><li><a href="module-viewerpreferences.html">viewerpreferences</a><ul class='methods'><li data-type='method'><a href="module-viewerpreferences.html#~viewerPreferences">viewerPreferences</a></li></ul></li><li><a href="module-webp_support.html">webp_support</a></li><li><a href="module-xmp_metadata.html">xmp_metadata</a><ul class='methods'><li data-type='method'><a href="module-xmp_metadata.html#~addMetadata">addMetadata</a></li></ul></li></ul><h3>Global</h3><ul><li><a href="global.html#constructor">constructor</a></li><li><a href="global.html#encryptor">encryptor</a></li><li><a href="global.html#hexToBytes">hexToBytes</a></li><li><a href="global.html#lsbFirstWord">lsbFirstWord</a></li><li><a href="global.html#mapArrayBufferViews">mapArrayBufferViews</a></li><li><a href="global.html#md5cycle">md5cycle</a></li><li><a href="global.html#processOwnerPassword">processOwnerPassword</a></li><li><a href="global.html#rc4">rc4</a></li><li><a href="global.html#repeat">repeat</a></li><li><a href="global.html#RGBColor">RGBColor</a></li><li><a href="global.html#SetsoptionsforBidiconversion">Sets options for Bidi conversion</a></li><li><a href="global.html#toHexString">toHexString</a></li><li><a href="global.html#toPDFName">toPDFName</a></li></ul>
</nav>

<div id="main">
    
    <h1 class="page-title">jsPDF</h1>
    

    




<section>

<header>
    
        <h2>
        jsPDF
        </h2>
        
    
</header>

<article>
    
        <div class="container-overview">
        
            

    

    <h4 class="name" id="jsPDF"><span class="type-signature"></span>new jsPDF<span class="signature">(options<span class="signature-attributes">opt</span>)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line174">line 174</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <pre class="prettyprint source"><code>{
 orientation: 'p',
 unit: 'mm',
 format: 'a4',
 putOnlyUsedFonts:true,
 floatPrecision: 16 // or &quot;smart&quot;, default is 16
}
</code></pre>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>options</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>Collection of settings initializing the jsPDF-instance</p>
                <h6>Properties</h6>
                

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        
        <th>Default</th>
        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>orientation</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>portrait</code>
                
                </td>
            

            <td class="description last"><p>Orientation of the first page. Possible values are &quot;portrait&quot; or &quot;landscape&quot; (or shortcuts &quot;p&quot; or &quot;l&quot;).<br /></p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>unit</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>mm</code>
                
                </td>
            

            <td class="description last"><p>Measurement unit (base unit) to be used when coordinates are specified.<br />
Possible values are &quot;pt&quot; (points), &quot;mm&quot;, &quot;cm&quot;, &quot;in&quot;, &quot;px&quot;, &quot;pc&quot;, &quot;em&quot; or &quot;ex&quot;. Note that in order to get the correct scaling for &quot;px&quot;
units, you need to enable the hotfix &quot;px_scaling&quot; by setting options.hotfixes = [&quot;px_scaling&quot;].</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>format</code></td>
            

            <td class="type">
            
                
<span class="param-type">string/Array</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>a4</code>
                
                </td>
            

            <td class="description last"><p>The format of the first page. Can be:<ul><li>a0 - a10</li><li>b0 - b10</li><li>c0 - c10</li><li>dl</li><li>letter</li><li>government-letter</li><li>legal</li><li>junior-legal</li><li>ledger</li><li>tabloid</li><li>credit-card</li></ul><br />
Default is &quot;a4&quot;. If you want to use your own format just pass instead of one of the above predefined formats the size as an number-array, e.g. [595.28, 841.89]</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>putOnlyUsedFonts</code></td>
            

            <td class="type">
            
                
<span class="param-type">boolean</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>false</code>
                
                </td>
            

            <td class="description last"><p>Only put fonts into the PDF, which were used.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>compress</code></td>
            

            <td class="type">
            
                
<span class="param-type">boolean</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>false</code>
                
                </td>
            

            <td class="description last"><p>Compress the generated PDF.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>precision</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>16</code>
                
                </td>
            

            <td class="description last"><p>Precision of the element-positions.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>userUnit</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>1.0</code>
                
                </td>
            

            <td class="description last"><p>Not to be confused with the base unit. Please inform yourself before you use it.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>hotfixes</code></td>
            

            <td class="type">
            
                
<span class="param-type">Array.&lt;string></span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                </td>
            

            <td class="description last"><p>An array of strings to enable hotfixes such as correct pixel scaling.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>encryption</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                </td>
            

            <td class="description last">
                <h6>Properties</h6>
                

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>userPassword</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>Password for the user bound by the given permissions list.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ownerPassword</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>Both userPassword and ownerPassword should be set for proper authentication.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>userPermissions</code></td>
            

            <td class="type">
            
                
<span class="param-type">Array.&lt;string></span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>Array of permissions &quot;print&quot;, &quot;modify&quot;, &quot;copy&quot;, &quot;annot-forms&quot;, accessible by the user.</p></td>
        </tr>

    
    </tbody>
</table>

            </td>
        </tr>

    

        <tr>
            
                <td class="name"><code>floatPrecision</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>
|

<span class="param-type">"smart"</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>16</code>
                
                </td>
            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>

            </td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        
<div class="param-desc">
    <p>jsPDF-instance</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
        </div>
    

    

    

    
    
    

     

    

    
        <h3 class="subsection-title">Members</h3>

        
            
<h4 class="name" id=".__bidiEngine__"><span class="type-signature">(static) </span>__bidiEngine__<span class="type-signature"></span></h4>





<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="libs_bidiEngine.js.html">libs/bidiEngine.js</a>, <a href="libs_bidiEngine.js.html#line2109">line 2109</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>constructor ( options )</p>
<p>Initializes Bidi engine</p>
</div>








        
            
<h4 class="name" id="advancedAPI"><span class="type-signature"></span>advancedAPI<span class="type-signature"></span></h4>





<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line399">line 399</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>For compatibility reasons jsPDF offers two API modes which differ in the way they convert between the the usual
screen coordinates and the PDF coordinate system.</p>
<ul>
<li>&quot;compat&quot;: Offers full compatibility across all plugins but does not allow arbitrary transforms</li>
<li>&quot;advanced&quot;: Allows arbitrary transforms and more advanced features like pattern fills. Some plugins might
not support this mode, though.
Initial mode is &quot;compat&quot;.</li>
</ul>
<p>You can either provide a callback to the body argument, which means that jsPDF will automatically switch back to
the original API mode afterwards; or you can omit the callback and switch back manually using compatAPI.</p>
<p>Note, that the calls to saveGraphicsState and restoreGraphicsState need to be balanced within the
callback or between calls of this method and its counterpart compatAPI. Calls to beginFormObject
or beginTilingPattern need to be closed by their counterparts before switching back to &quot;compat&quot; API mode.</p>
</div>








        
            
<h4 class="name" id="API"><span class="type-signature"></span>API<span class="type-signature"></span></h4>





<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line6050">line 6050</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>jsPDF.API is a STATIC property of jsPDF class.
jsPDF.API is an object you can add methods and properties to.
The methods / properties you add will show up in new jsPDF objects.</p>
<p>One property is prepopulated. It is the 'events' Object. Plugin authors can add topics,
callbacks to this object. These will be reassigned to all new instances of jsPDF.</p>
</div>







    <h5>Example</h5>
    
    <pre class="prettyprint"><code>jsPDF.API.mymethod = function(){  // 'this' will be ref to internal API object. see jsPDF source  // , so you can refer to built-in methods like so:  //     this.line(....)  //     this.text(....)}var pdfdoc = new jsPDF()pdfdoc.mymethod() // &lt;- !!!!!!</code></pre>



        
            
<h4 class="name" id="beginTilingPattern"><span class="type-signature"></span>beginTilingPattern<span class="type-signature"></span></h4>





<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line1530">line 1530</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Begins a new tiling pattern. All subsequent render calls are drawn to this pattern until API.endTilingPattern
gets called. Only available in &quot;advanced&quot; API mode.</p>
</div>








        
            
<h4 class="name" id="CapJoinStyles"><span class="type-signature"></span>CapJoinStyles<span class="type-signature"></span></h4>





<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5340">line 5340</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Is an Object providing a mapping from human-readable to
integer flag values designating the varieties of line cap
and join styles.</p>
</div>








        
            
<h4 class="name" id="compatApi"><span class="type-signature"></span>compatApi<span class="type-signature"></span></h4>





<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line440">line 440</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Switches to &quot;compat&quot; API mode. See advancedAPI for more details.</p>
</div>








        
            
<h4 class="name" id="endTilingPattern"><span class="type-signature"></span>endTilingPattern<span class="type-signature"></span></h4>





<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line1549">line 1549</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Ends a tiling pattern and sets the render target to the one active before API.beginTilingPattern has been called.</p>
<p>Only available in &quot;advanced&quot; API mode.</p>
</div>








        
            
<h4 class="name" id="identityMatrix"><span class="type-signature"></span>#identityMatrix<span class="type-signature"> :<a href="Matrix.html">Matrix</a></span></h4>





<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line1452">line 1452</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>The identity matrix (equivalent to new Matrix(1, 0, 0, 1, 0, 0)).</p>
</div>



    <h5>Type:</h5>
    <ul>
        <li>
            
<span class="param-type"><a href="Matrix.html">Matrix</a></span>


        </li>
    </ul>






        
            
<h4 class="name" id="isAdvancedAPI"><span class="type-signature"></span>isAdvancedAPI<span class="type-signature"></span></h4>





<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line469">line 469</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>












        
            
<h4 class="name" id="matrixMult"><span class="type-signature"></span>matrixMult<span class="type-signature"></span></h4>





<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line1441">line 1441</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Multiplies two matrices. (see <a href="Matrix.html">Matrix</a>)</p>
</div>








        
            
<h4 class="name" id="version"><span class="type-signature"></span>version<span class="type-signature"> :string</span></h4>





<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line6076">line 6076</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>The version of jsPDF.</p>
</div>



    <h5>Type:</h5>
    <ul>
        <li>
            
<span class="param-type">string</span>


        </li>
    </ul>






        
    

    
        <h3 class="subsection-title">Methods</h3>

        
            

    

    <h4 class="name" id="addFont"><span class="type-signature"></span>addFont<span class="signature">(postScriptName, id, fontStyle, fontWeight, encoding)</span><span class="type-signature"> &rarr; {string}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4909">line 4909</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Add a custom font to the current instance.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>postScriptName</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>PDF specification full name for the font.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>id</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>PDF-document-instance-specific label assinged to the font.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>fontStyle</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>Style of the Font.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>fontWeight</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>
|

<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>Weight of the Font.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>encoding</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>


            
            </td>

            

            

            <td class="description last"><p>Encoding_name-to-Font_metrics_object mapping.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        
<div class="param-desc">
    <p>fontId</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">string</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="addGState"><span class="type-signature"></span>addGState<span class="signature">(key, gState)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5509">line 5509</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds a new <a href="GState.html">GState</a> for later use. See setGState.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>key</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>gState</code></td>
            

            <td class="type">
            
                
<span class="param-type"><a href="GState.html">GState</a></span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="addPage"><span class="type-signature"></span>addPage<span class="signature">(format, orientation)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line3299">line 3299</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds (and transfers the focus to) new page to the PDF document.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>format</code></td>
            

            <td class="type">
            
                
<span class="param-type">String/Array</span>


            
            </td>

            

            

            <td class="description last"><p>The format of the new page. Can be: <ul><li>a0 - a10</li><li>b0 - b10</li><li>c0 - c10</li><li>dl</li><li>letter</li><li>government-letter</li><li>legal</li><li>junior-legal</li><li>ledger</li><li>tabloid</li><li>credit-card</li></ul><br />
Default is &quot;a4&quot;. If you want to use your own format just pass instead of one of the above predefined formats the size as an number-array, e.g. [595.28, 841.89]</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>orientation</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>Orientation of the new page. Possible values are &quot;portrait&quot; or &quot;landscape&quot; (or shortcuts &quot;p&quot; (Default), &quot;l&quot;).</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="addPattern"><span class="type-signature"></span>addPattern<span class="signature">(key, pattern)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line1514">line 1514</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds a new API.ShadingPattern for later use. Only available in &quot;advanced&quot; API mode.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>key</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>pattern</code></td>
            

            <td class="type">
            
                
<span class="param-type">Pattern</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="beginFormObject"><span class="type-signature"></span>beginFormObject<span class="signature">(x, y, width, height, matrix)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5743">line 5743</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Starts a new pdf form object, which means that all consequent draw calls target a new independent object
until endFormObject is called. The created object can be referenced and drawn later using
doFormObject. Nested form objects are possible.
x, y, width, height set the bounding box that is used to clip the content.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>x</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>width</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>height</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>matrix</code></td>
            

            <td class="type">
            
                
<span class="param-type"><a href="Matrix.html">Matrix</a></span>


            
            </td>

            

            

            <td class="description last"><p>The matrix that will be applied to convert the form objects coordinate system to
the parent's.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="circle"><span class="type-signature"></span>circle<span class="signature">(x, y, r, style<span class="signature-attributes">opt</span>)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4817">line 4817</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds an circle to PDF.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>x</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against left edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against upper edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>r</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Radius (in units declared at inception of PDF document)</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>style</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>A string specifying the painting style or null. Valid styles include:
'S' [default] - stroke,
'F' - fill,
and 'DF' (or 'FD') -  fill then stroke.
In &quot;compat&quot; API mode, a null value postpones setting the style so that a shape may be composed using multiple
method calls. The last drawing method call used to define the shape should not have a null style argument.</p>
<p>In &quot;advanced&quot; API mode this parameter is deprecated.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="clip"><span class="type-signature"></span>clip<span class="signature">(rule)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4065">line 4065</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>All .clip() after calling drawing ops with a style argument of null.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>rule</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>Only possible value is 'evenodd'</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="clipEvenOdd"><span class="type-signature"></span>clipEvenOdd<span class="signature">()</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4086">line 4086</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Modify the current clip path by intersecting it with the current path using the even-odd rule. Note
that this will NOT consume the current path. In order to only use this path for clipping call
API.discardPath afterwards.</p>
</div>

























<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="close"><span class="type-signature"></span>close<span class="signature">()</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4178">line 4178</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Close the current path. The PDF &quot;h&quot; operator.</p>
</div>

























<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="comment"><span class="type-signature"></span>comment<span class="signature">(text)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5580">line 5580</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Inserts a debug comment into the generated pdf.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>text</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="curveTo"><span class="type-signature"></span>curveTo<span class="signature">(x1, y1, x2, y2, x3, y3)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4399">line 4399</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Append a cubic Bézier curve to the current path. The curve shall extend from the current point to the point
(x3, y3), using (x1, y1) and (x2, y2) as Bézier control points. The new current point shall be (x3, x3).</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>x1</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y1</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>x2</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y2</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>x3</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y3</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="deletePage"><span class="type-signature"></span>deletePage<span class="signature">(targetPage)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line3388">line 3388</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Deletes a page from the PDF.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>targetPage</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="discardPath"><span class="type-signature"></span>discardPath<span class="signature">()</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4100">line 4100</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Consumes the current path without any effect. Mainly used in combination with clip or
clipEvenOdd. The PDF &quot;n&quot; operator.</p>
</div>

























<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="doFormObject"><span class="type-signature"></span>doFormObject<span class="signature">(key, matrix)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5785">line 5785</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Draws the specified form object by referencing to the respective pdf XObject created with
API.beginFormObject and endFormObject.
The location is determined by matrix.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>key</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"><p>The key to the form object.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>matrix</code></td>
            

            <td class="type">
            
                
<span class="param-type"><a href="Matrix.html">Matrix</a></span>


            
            </td>

            

            

            <td class="description last"><p>The matrix applied before drawing the form object.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="ellipse"><span class="type-signature"></span>ellipse<span class="signature">(x, y, rx, ry, style<span class="signature-attributes">opt</span>)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4773">line 4773</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds an ellipse to PDF.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>x</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against left edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against upper edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>rx</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Radius along x axis (in units declared at inception of PDF document)</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ry</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Radius along y axis (in units declared at inception of PDF document)</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>style</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>A string specifying the painting style or null. Valid styles include:
'S' [default] - stroke,
'F' - fill,
and 'DF' (or 'FD') -  fill then stroke.
In &quot;compat&quot; API mode, a null value postpones setting the style so that a shape may be composed using multiple
method calls. The last drawing method call used to define the shape should not have a null style argument.</p>
<p>In &quot;advanced&quot; API mode this parameter is deprecated.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="endFormObject"><span class="type-signature"></span>endFormObject<span class="signature">(key)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5772">line 5772</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Completes and saves the form object.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>key</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"><p>The key by which this form object can be referenced.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="fill"><span class="type-signature"></span>fill<span class="signature">(pattern<span class="signature-attributes">opt</span>)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4204">line 4204</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Fill the current path using the nonzero winding number rule. If a pattern is provided, the path will be filled
with this pattern, otherwise with the current fill color. Equivalent to the PDF &quot;f&quot; operator.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>pattern</code></td>
            

            <td class="type">
            
                
<span class="param-type"><a href="global.html#PatternData">PatternData</a></span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>If provided the path will be filled with this pattern</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="fillEvenOdd"><span class="type-signature"></span>fillEvenOdd<span class="signature">(pattern<span class="signature-attributes">opt</span>)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4219">line 4219</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
    <dt class="tag-see">See:</dt>
    <dd class="tag-see">
        <ul>
            <li>API.fill</li>
        </ul>
    </dd>
    

    
</dl>





<div class="description usertext">
    <p>Fill the current path using the even-odd rule. The PDF f* operator.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>pattern</code></td>
            

            <td class="type">
            
                
<span class="param-type"><a href="global.html#PatternData">PatternData</a></span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>If provided the path will be filled with this pattern</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="fillStroke"><span class="type-signature"></span>fillStroke<span class="signature">(pattern<span class="signature-attributes">opt</span>)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4234">line 4234</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
    <dt class="tag-see">See:</dt>
    <dd class="tag-see">
        <ul>
            <li>API.fill</li>
        </ul>
    </dd>
    

    
</dl>





<div class="description usertext">
    <p>Fill using the nonzero winding number rule and then stroke the current Path. The PDF &quot;B&quot; operator.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>pattern</code></td>
            

            <td class="type">
            
                
<span class="param-type"><a href="global.html#PatternData">PatternData</a></span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>If provided the path will be stroked with this pattern</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="fillStrokeEvenOdd"><span class="type-signature"></span>fillStrokeEvenOdd<span class="signature">(pattern<span class="signature-attributes">opt</span>)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4249">line 4249</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
    <dt class="tag-see">See:</dt>
    <dd class="tag-see">
        <ul>
            <li>API.fill</li>
        </ul>
    </dd>
    

    
</dl>





<div class="description usertext">
    <p>Fill using the even-odd rule and then stroke the current Path. The PDF &quot;B&quot; operator.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>pattern</code></td>
            

            <td class="type">
            
                
<span class="param-type"><a href="global.html#PatternData">PatternData</a></span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>If provided the path will be fill-stroked with this pattern</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getCharSpace"><span class="type-signature"></span>getCharSpace<span class="signature">()</span><span class="type-signature"> &rarr; {number}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5308">line 5308</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Get global value of CharSpace.</p>
</div>

























<h5>Returns:</h5>

        
<div class="param-desc">
    <p>charSpace</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">number</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getCreationDate"><span class="type-signature"></span>getCreationDate<span class="signature">(type)</span><span class="type-signature"> &rarr; {Object}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line712">line 712</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>















    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>type</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">Object</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getDrawColor"><span class="type-signature"></span>getDrawColor<span class="signature">()</span><span class="type-signature"> &rarr; {string}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5092">line 5092</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Gets the stroke color for upcoming elements.</p>
</div>

























<h5>Returns:</h5>

        
<div class="param-desc">
    <p>colorAsHex</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">string</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getFileId"><span class="type-signature"></span>getFileId<span class="signature">()</span><span class="type-signature"> &rarr; {string}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line620">line 620</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





























<h5>Returns:</h5>

        
<div class="param-desc">
    <p>GUID.</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">string</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getFillColor"><span class="type-signature"></span>getFillColor<span class="signature">()</span><span class="type-signature"> &rarr; {string}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5165">line 5165</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Gets the fill color for upcoming elements.</p>
</div>

























<h5>Returns:</h5>

        
<div class="param-desc">
    <p>colorAsHex</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">string</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getFont"><span class="type-signature"></span>getFont<span class="signature">()</span><span class="type-signature"> &rarr; {Object}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4867">line 4867</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Gets text font face, variant for upcoming text elements.</p>
</div>

























<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">Object</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getFontList"><span class="type-signature"></span>getFontList<span class="signature">()</span><span class="type-signature"> &rarr; {Object}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4880">line 4880</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Returns an object - a tree of fontName to fontStyle relationships available to
active PDF document.</p>
</div>

























<h5>Returns:</h5>

        
<div class="param-desc">
    <p>Like {'times':['normal', 'italic', ... ], 'arial':['normal', 'bold', ... ], ... }</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">Object</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getFontSize"><span class="type-signature"></span>getFontSize<span class="signature">()</span><span class="type-signature"> &rarr; {number}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line838">line 838</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Gets the fontsize for upcoming text elements.</p>
</div>

























<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">number</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getFormObject"><span class="type-signature"></span>getFormObject<span class="signature">(key)</span><span class="type-signature"> &rarr; {Object|<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5806">line 5806</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Returns the form object specified by key.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>key</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>
<ul>
        <li>


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">Object</span>


    </dd>
</dl>
</li>
    
        <li>


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>
</li>
    </ul>



        
            

    

    <h4 class="name" id="getLineHeightFactor"><span class="type-signature"></span>getLineHeightFactor<span class="signature">()</span><span class="type-signature"> &rarr; {number}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5044">line 5044</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Gets the LineHeightFactor, default: 1.15.</p>
</div>

























<h5>Returns:</h5>

        
<div class="param-desc">
    <p>lineHeightFactor</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">number</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getLineWidth"><span class="type-signature"></span>getLineWidth<span class="signature">()</span><span class="type-signature"> &rarr; {number}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4947">line 4947</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Gets the line width, default: 0.200025.</p>
</div>

























<h5>Returns:</h5>

        
<div class="param-desc">
    <p>lineWidth</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">number</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getR2L"><span class="type-signature"></span>getR2L<span class="signature">()</span><span class="type-signature"> &rarr; {boolean}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line872">line 872</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Get value of R2L functionality.</p>
</div>

























<h5>Returns:</h5>

        
<div class="param-desc">
    <p>jsPDF-instance</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">boolean</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="getTextColor"><span class="type-signature"></span>getTextColor<span class="signature">()</span><span class="type-signature"> &rarr; {string}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5237">line 5237</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Gets the text color for upcoming elements.</p>
</div>

























<h5>Returns:</h5>

        
<div class="param-desc">
    <p>colorAsHex</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">string</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="insertPage"><span class="type-signature"></span>insertPage<span class="signature">(beforePage)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line3338">line 3338</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>















    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>beforePage</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="line"><span class="type-signature"></span>line<span class="signature">(x1, y1, x2, y2, style)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4430">line 4430</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Draw a line on the current page.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>x1</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y1</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>x2</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y2</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>style</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>A string specifying the painting style or null.  Valid styles include: 'S' [default] - stroke, 'F' - fill,  and 'DF' (or 'FD') -  fill then stroke. A null value postpones setting the style so that a shape may be composed using multiple method calls. The last drawing method call used to define the shape should not have a null style argument. default: 'S'</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="lines"><span class="type-signature"></span>lines<span class="signature">(lines, x, y, scale, style<span class="signature-attributes">opt</span>, closed<span class="signature-attributes">opt</span>)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4469">line 4469</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds series of curves (straight lines or cubic bezier curves) to canvas, starting at <code>x</code>, <code>y</code> coordinates.
All data points in <code>lines</code> are relative to last line origin.
<code>x</code>, <code>y</code> become x1,y1 for first line / curve in the set.
For lines you only need to specify [x2, y2] - (ending point) vector against x1, y1 starting point.
For bezier curves you need to specify [x2,y2,x3,y3,x4,y4] - vectors to control points 1, 2, ending point. All vectors are against the start of the curve - x1,y1.</p>
</div>









    <h5>Example</h5>
    
    <pre class="prettyprint"><code>.lines([[2,2],[-2,2],[1,1,2,2,3,3],[2,1]], 212,110, [1,1], 'F', false) // line, line, bezier curve, line</code></pre>




    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>lines</code></td>
            

            <td class="type">
            
                
<span class="param-type">Array</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Array of <em>vector</em> shifts as pairs (lines) or sextets (cubic bezier curves).</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>x</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against left edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against upper edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>scale</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>(Defaults to [1.0,1.0]) x,y Scaling factor for all vectors. Elements can be any floating number Sub-one makes drawing smaller. Over-one grows the drawing. Negative flips the direction.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>style</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>A string specifying the painting style or null. Valid styles include:
'S' [default] - stroke,
'F' - fill,
and 'DF' (or 'FD') -  fill then stroke.
In &quot;compat&quot; API mode, a null value postpones setting the style so that a shape may be composed using multiple
method calls. The last drawing method call used to define the shape should not have a null style argument.</p>
<p>In &quot;advanced&quot; API mode this parameter is deprecated.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>closed</code></td>
            

            <td class="type">
            
                
<span class="param-type">Boolean</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>If true, the path is closed with a straight line from the end of the last curve to the starting point.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="lineTo"><span class="type-signature"></span>lineTo<span class="signature">(x, y)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4383">line 4383</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Append a straight line segment from the current point to the point (x, y). The PDF &quot;l&quot; operator.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>x</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="movePage"><span class="type-signature"></span>movePage<span class="signature">(targetPage, beforePage)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line3353">line 3353</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>















    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>targetPage</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>beforePage</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="moveTo"><span class="type-signature"></span>moveTo<span class="signature">(x, y)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4368">line 4368</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Begin a new subpath by moving the current point to coordinates (x, y). The PDF &quot;m&quot; operator.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>x</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="output"><span class="type-signature"></span>output<span class="signature">(type, options)</span><span class="type-signature"> &rarr; {string|window|ArrayBuffer|Blob|<a href="jsPDF.html">jsPDF</a>|null|undefined}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line3010">line 3010</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Generates the PDF document.</p>
<p>If <code>type</code> argument is undefined, output is raw body of resulting PDF returned as a string.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>type</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>A string identifying one of the possible output types.<br/>
Possible values are: <br/>
'arraybuffer' -&gt; (ArrayBuffer)<br/>
'blob' -&gt; (Blob)<br/>
'bloburi'/'bloburl' -&gt; (string)<br/>
'datauristring'/'dataurlstring' -&gt; (string)<br/>
'datauri'/'dataurl' -&gt; (undefined) -&gt; change location to generated datauristring/dataurlstring<br/>
'dataurlnewwindow' -&gt; (window | null | undefined) throws error if global isn't a window object(node)<br/>
'pdfobjectnewwindow' -&gt; (window | null) throws error if global isn't a window object(node)<br/>
'pdfjsnewwindow' -&gt; (wind | null)</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>options</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>
|

<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>An object providing some additional signalling to PDF generator.<br/>
Possible options are 'filename'.<br/>
A string can be passed instead of {filename:string} and defaults to 'generated.pdf'</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">string</span>
|

<span class="param-type">window</span>
|

<span class="param-type">ArrayBuffer</span>
|

<span class="param-type">Blob</span>
|

<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>
|

<span class="param-type">null</span>
|

<span class="param-type">undefined</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="path"><span class="type-signature"></span>path<span class="signature">(lines)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4571">line 4571</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Similar to API.lines but all coordinates are interpreted as absolute coordinates instead of relative.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>lines</code></td>
            

            <td class="type">
            
                
<span class="param-type">Array.&lt;Object></span>


            
            </td>

            

            

            <td class="description last"><p>An array of {op: operator, c: coordinates} object, where op is one of &quot;m&quot; (move to), &quot;l&quot; (line to)
&quot;c&quot; (cubic bezier curve) and &quot;h&quot; (close (sub)path)). c is an array of coordinates. &quot;m&quot; and &quot;l&quot; expect two, &quot;c&quot;
six and &quot;h&quot; an empty array (or undefined).</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="rect"><span class="type-signature"></span>rect<span class="signature">(x, y, w, h, style<span class="signature-attributes">opt</span>)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4604">line 4604</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds a rectangle to PDF.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>x</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against left edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against upper edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>w</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Width (in units declared at inception of PDF document)</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>h</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Height (in units declared at inception of PDF document)</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>style</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>A string specifying the painting style or null. Valid styles include:
'S' [default] - stroke,
'F' - fill,
and 'DF' (or 'FD') -  fill then stroke.
In &quot;compat&quot; API mode, a null value postpones setting the style so that a shape may be composed using multiple
method calls. The last drawing method call used to define the shape should not have a null style argument.</p>
<p>In &quot;advanced&quot; API mode this parameter is deprecated.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="restoreGraphicsState"><span class="type-signature"></span>restoreGraphicsState<span class="signature">()</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5545">line 5545</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Restores a previously saved graphics state saved by saveGraphicsState (&quot;pops the stack&quot;).</p>
</div>

























<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="roundedRect"><span class="type-signature"></span>roundedRect<span class="signature">(x, y, w, h, rx, ry, style<span class="signature-attributes">opt</span>)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4705">line 4705</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds a rectangle with rounded corners to PDF.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>x</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against left edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against upper edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>w</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Width (in units declared at inception of PDF document)</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>h</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Height (in units declared at inception of PDF document)</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>rx</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Radius along x axis (in units declared at inception of PDF document)</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ry</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Radius along y axis (in units declared at inception of PDF document)</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>style</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>A string specifying the painting style or null. Valid styles include:
'S' [default] - stroke,
'F' - fill,
and 'DF' (or 'FD') -  fill then stroke.
In &quot;compat&quot; API mode, a null value postpones setting the style so that a shape may be composed using multiple
method calls. The last drawing method call used to define the shape should not have a null style argument.</p>
<p>In &quot;advanced&quot; API mode this parameter is deprecated.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="save"><span class="type-signature"></span>save<span class="signature">(filename, options)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>|Promise}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5826">line 5826</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Saves as PDF document. An alias of jsPDF.output('save', 'filename.pdf').
Uses FileSaver.js-method saveAs.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>filename</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>The filename including extension.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>options</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>


            
            </td>

            

            

            <td class="description last"><p>An Object with additional options, possible options: 'returnPromise'.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        
<div class="param-desc">
    <p>jsPDF-instance</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>
|

<span class="param-type">Promise</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="saveGraphicsState"><span class="type-signature"></span>saveGraphicsState<span class="signature">()</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5525">line 5525</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Saves the current graphics state (&quot;pushes it on the stack&quot;). It can be restored by restoreGraphicsState
later. Here, the general pdf graphics state is meant, also including the current transformation matrix,
fill and stroke colors etc.</p>
</div>

























<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setCharSpace"><span class="type-signature"></span>setCharSpace<span class="signature">(charSpace)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5321">line 5321</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Set global value of CharSpace.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>charSpace</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        
<div class="param-desc">
    <p>jsPDF-instance</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setCreationDate"><span class="type-signature"></span>setCreationDate<span class="signature">(date)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line699">line 699</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>















    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>date</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setCurrentTransformationMatrix"><span class="type-signature"></span>setCurrentTransformationMatrix<span class="signature">(matrix)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5566">line 5566</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Appends this matrix to the left of all previously applied matrices.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>matrix</code></td>
            

            <td class="type">
            
                
<span class="param-type"><a href="Matrix.html">Matrix</a></span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setDisplayMode"><span class="type-signature"></span>setDisplayMode<span class="signature">(zoom, layout, pmode)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line967">line 967</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Set the display mode options of the page like zoom and layout.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>zoom</code></td>
            

            <td class="type">
            
                
<span class="param-type">integer</span>
|

<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"><p>You can pass an integer or percentage as
a string. 2 will scale the document up 2x, '200%' will scale up by the
same amount. You can also set it to 'fullwidth', 'fullheight',
'fullpage', or 'original'.</p>
<p>Only certain PDF readers support this, such as Adobe Acrobat.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>layout</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>Layout mode can be: 'continuous' - this is the
default continuous scroll. 'single' - the single page mode only shows one
page at a time. 'twoleft' - two column left mode, first page starts on
the left, and 'tworight' - pages are laid out in two columns, with the
first page on the right. This would be used for books.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>pmode</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>'UseOutlines' - it shows the
outline of the document on the left. 'UseThumbs' - shows thumbnails along
the left. 'FullScreen' - prompts the user to enter fullscreen mode.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setDocumentProperties"><span class="type-signature"></span>setDocumentProperties<span class="signature">(A)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line1022">line 1022</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds a properties to the PDF document.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>A</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>


            
            </td>

            

            

            <td class="description last"><p>property_name-to-property_value object structure.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setDrawColor"><span class="type-signature"></span>setDrawColor<span class="signature">(ch1, ch2, ch3, ch4)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5105">line 5105</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets the stroke color for upcoming elements.</p>
<p>Depending on the number of arguments given, Gray, RGB, or CMYK
color space is implied.</p>
<p>When only ch1 is given, &quot;Gray&quot; color space is implied and it
must be a value in the range from 0.00 (solid black) to to 1.00 (white)
if values are communicated as String types, or in range from 0 (black)
to 255 (white) if communicated as Number type.
The RGB-like 0-255 range is provided for backward compatibility.</p>
<p>When only ch1,ch2,ch3 are given, &quot;RGB&quot; color space is implied and each
value must be in the range from 0.00 (minimum intensity) to to 1.00
(max intensity) if values are communicated as String types, or
from 0 (min intensity) to to 255 (max intensity) if values are communicated
as Number types.
The RGB-like 0-255 range is provided for backward compatibility.</p>
<p>When ch1,ch2,ch3,ch4 are given, &quot;CMYK&quot; color space is implied and each
value must be a in the range from 0.00 (0% concentration) to to
1.00 (100% concentration)</p>
<p>Because JavaScript treats fixed point numbers badly (rounds to
floating point nearest to binary representation) it is highly advised to
communicate the fractional numbers as String types, not JavaScript Number type.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>ch1</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>
|

<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value or {string} ch1 color value in hexadecimal, example: '#FFFFFF'.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ch2</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ch3</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ch4</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setFileId"><span class="type-signature"></span>setFileId<span class="signature">(value)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line607">line 607</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>















    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>value</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>GUID.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setFillColor"><span class="type-signature"></span>setFillColor<span class="signature">(ch1, ch2, ch3, ch4)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5178">line 5178</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets the fill color for upcoming elements.</p>
<p>Depending on the number of arguments given, Gray, RGB, or CMYK
color space is implied.</p>
<p>When only ch1 is given, &quot;Gray&quot; color space is implied and it
must be a value in the range from 0.00 (solid black) to to 1.00 (white)
if values are communicated as String types, or in range from 0 (black)
to 255 (white) if communicated as Number type.
The RGB-like 0-255 range is provided for backward compatibility.</p>
<p>When only ch1,ch2,ch3 are given, &quot;RGB&quot; color space is implied and each
value must be in the range from 0.00 (minimum intensity) to to 1.00
(max intensity) if values are communicated as String types, or
from 0 (min intensity) to to 255 (max intensity) if values are communicated
as Number types.
The RGB-like 0-255 range is provided for backward compatibility.</p>
<p>When ch1,ch2,ch3,ch4 are given, &quot;CMYK&quot; color space is implied and each
value must be a in the range from 0.00 (0% concentration) to to
1.00 (100% concentration)</p>
<p>Because JavaScript treats fixed point numbers badly (rounds to
floating point nearest to binary representation) it is highly advised to
communicate the fractional numbers as String types, not JavaScript Number type.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>ch1</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>
|

<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value or {string} ch1 color value in hexadecimal, example: '#FFFFFF'.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ch2</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ch3</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ch4</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setFont"><span class="type-signature"></span>setFont<span class="signature">(fontName, fontStyle, fontWeight)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4844">line 4844</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets text font face, variant for upcoming text elements.
See output of jsPDF.getFontList() for possible font names, styles.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>fontName</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>Font name or family. Example: &quot;times&quot;.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>fontStyle</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>Font style or variant. Example: &quot;italic&quot;.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>fontWeight</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>
|

<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>Weight of the Font. Example: &quot;normal&quot; | 400</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setFontSize"><span class="type-signature"></span>setFontSize<span class="signature">(size)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line819">line 819</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets font size for upcoming text elements.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>size</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"><p>Font size in points.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setGState"><span class="type-signature"></span>setGState<span class="signature">(gState)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5453">line 5453</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets a either previously added <a href="GState.html">GState</a> (via addGState) or a new <a href="GState.html">GState</a>.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>gState</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>
|

<span class="param-type"><a href="GState.html">GState</a></span>


            
            </td>

            

            

            <td class="description last"><p>If type is string, a previously added GState is used, if type is GState
it will be added before use.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setLineCap"><span class="type-signature"></span>setLineCap<span class="signature">(style)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5364">line 5364</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets the line cap styles.
See {jsPDF.CapJoinStyles} for variants.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>style</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>
|

<span class="param-type">Number</span>


            
            </td>

            

            

            <td class="description last"><p>A string or number identifying the type of line cap.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setLineDashPattern"><span class="type-signature"></span>setLineDashPattern<span class="signature">(dashArray, dashPhase)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4978">line 4978</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets the dash pattern for upcoming lines.</p>
<p>To reset the settings simply call the method without any parameters.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>dashArray</code></td>
            

            <td class="type">
            
                
<span class="param-type">Array.&lt;number></span>


            
            </td>

            

            

            <td class="description last"><p>An array containing 0-2 numbers. The first number sets the length of the
dashes, the second number the length of the gaps. If the second number is missing, the gaps are considered
to be as long as the dashes. An empty array means solid, unbroken lines.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>dashPhase</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"><p>The phase lines start with.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setLineHeightFactor"><span class="type-signature"></span>setLineHeightFactor<span class="signature">(value)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5024">line 5024</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets the LineHeightFactor of proportion.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>value</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"><p>LineHeightFactor value. Default: 1.15.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setLineJoin"><span class="type-signature"></span>setLineJoin<span class="signature">(style)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5391">line 5391</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets the line join styles.
See {jsPDF.CapJoinStyles} for variants.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>style</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>
|

<span class="param-type">Number</span>


            
            </td>

            

            

            <td class="description last"><p>A string or number identifying the type of line join.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setLineMiterLimit"><span class="type-signature"></span>setLineMiterLimit<span class="signature">(length)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5418">line 5418</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets the miterLimit property, which effects the maximum miter length.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>length</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"><p>The length of the miter</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setLineWidth"><span class="type-signature"></span>setLineWidth<span class="signature">(width)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4960">line 4960</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets line width for upcoming lines.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>width</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"><p>Line width (in units declared at inception of PDF document).</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setPage"><span class="type-signature"></span>setPage<span class="signature">(page)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line3315">line 3315</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds (and transfers the focus to) new page to the PDF document.</p>
</div>









    <h5>Example</h5>
    
    <pre class="prettyprint"><code>doc = jsPDF()doc.addPage()doc.addPage()doc.text('I am on page 3', 10, 10)doc.setPage(1)doc.text('I am on page 1', 10, 10)</code></pre>




    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>page</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            

            

            <td class="description last"><p>Switch the active page to the page number specified (indexed starting at 1).</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setPrecision"><span class="type-signature"></span>setPrecision<span class="signature">(precision)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line564">line 564</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>















    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>precision</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setR2L"><span class="type-signature"></span>setR2L<span class="signature">(value)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line857">line 857</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Set value of R2L functionality.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>value</code></td>
            

            <td class="type">
            
                
<span class="param-type">boolean</span>


            
            </td>

            

            

            <td class="description last"></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        
<div class="param-desc">
    <p>jsPDF-instance</p>
</div>



<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="setTextColor"><span class="type-signature"></span>setTextColor<span class="signature">(ch1, ch2, ch3, ch4)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5249">line 5249</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Sets the text color for upcoming elements.</p>
<p>Depending on the number of arguments given, Gray, RGB, or CMYK
color space is implied.</p>
<p>When only ch1 is given, &quot;Gray&quot; color space is implied and it
must be a value in the range from 0.00 (solid black) to to 1.00 (white)
if values are communicated as String types, or in range from 0 (black)
to 255 (white) if communicated as Number type.
The RGB-like 0-255 range is provided for backward compatibility.</p>
<p>When only ch1,ch2,ch3 are given, &quot;RGB&quot; color space is implied and each
value must be in the range from 0.00 (minimum intensity) to to 1.00
(max intensity) if values are communicated as String types, or
from 0 (min intensity) to to 255 (max intensity) if values are communicated
as Number types.
The RGB-like 0-255 range is provided for backward compatibility.</p>
<p>When ch1,ch2,ch3,ch4 are given, &quot;CMYK&quot; color space is implied and each
value must be a in the range from 0.00 (0% concentration) to to
1.00 (100% concentration)</p>
<p>Because JavaScript treats fixed point numbers badly (rounds to
floating point nearest to binary representation) it is highly advised to
communicate the fractional numbers as String types, not JavaScript Number type.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>ch1</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>
|

<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value or {string} ch1 color value in hexadecimal, example: '#FFFFFF'.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ch2</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ch3</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>ch4</code></td>
            

            <td class="type">
            
                
<span class="param-type">Number</span>


            
            </td>

            

            

            <td class="description last"><p>Color channel value.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="stroke"><span class="type-signature"></span>stroke<span class="signature">()</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4191">line 4191</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Stroke the path. The PDF &quot;S&quot; operator.</p>
</div>

























<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="text"><span class="type-signature"></span>text<span class="signature">(text, x, y, options<span class="signature-attributes">opt</span>, transform)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line3402">line 3402</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds text to page. Supports adding multiline text when 'text' argument is an Array of Strings.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>text</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>
|

<span class="param-type">Array</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>String or array of strings to be added to the page. Each line is shifted one line down per font, spacing settings declared before this call.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>x</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against left edge of the page.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against upper edge of the page.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>options</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>Collection of settings signaling how the text must be encoded.</p>
                <h6>Properties</h6>
                

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        
        <th>Default</th>
        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>align</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>left</code>
                
                </td>
            

            <td class="description last"><p>The alignment of the text, possible values: left, center, right, justify.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>baseline</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>alphabetic</code>
                
                </td>
            

            <td class="description last"><p>Sets text baseline used when drawing the text, possible values: alphabetic, ideographic, bottom, top, middle, hanging</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>angle</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>
|

<span class="param-type"><a href="Matrix.html">Matrix</a></span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>0</code>
                
                </td>
            

            <td class="description last"><p>Rotate the text clockwise or counterclockwise. Expects the angle in degree.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>rotationDirection</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>1</code>
                
                </td>
            

            <td class="description last"><p>Direction of the rotation. 0 = clockwise, 1 = counterclockwise.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>charSpace</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>0</code>
                
                </td>
            

            <td class="description last"><p>The space between each letter.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>horizontalScale</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>1</code>
                
                </td>
            

            <td class="description last"><p>Horizontal scale of the text as a factor of the regular size.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>lineHeightFactor</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>1.15</code>
                
                </td>
            

            <td class="description last"><p>The lineheight of each line.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>flags</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                </td>
            

            <td class="description last"><p>Flags for to8bitStream.</p>
                <h6>Properties</h6>
                

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        
        <th>Default</th>
        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>noBOM</code></td>
            

            <td class="type">
            
                
<span class="param-type">boolean</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>true</code>
                
                </td>
            

            <td class="description last"><p>Don't add BOM to Unicode-text.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>autoencode</code></td>
            

            <td class="type">
            
                
<span class="param-type">boolean</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>true</code>
                
                </td>
            

            <td class="description last"><p>Autoencode the Text.</p></td>
        </tr>

    
    </tbody>
</table>

            </td>
        </tr>

    

        <tr>
            
                <td class="name"><code>maxWidth</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>0</code>
                
                </td>
            

            <td class="description last"><p>Split the text by given width, 0 = no split.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>renderingMode</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                    <code>fill</code>
                
                </td>
            

            <td class="description last"><p>Set how the text should be rendered, possible values: fill, stroke, fillThenStroke, invisible, fillAndAddForClipping, strokeAndAddPathForClipping, fillThenStrokeAndAddToPathForClipping, addToPathForClipping.</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>isInputVisual</code></td>
            

            <td class="type">
            
                
<span class="param-type">boolean</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                </td>
            

            <td class="description last"><p>Option for the BidiEngine</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>isOutputVisual</code></td>
            

            <td class="type">
            
                
<span class="param-type">boolean</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                </td>
            

            <td class="description last"><p>Option for the BidiEngine</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>isInputRtl</code></td>
            

            <td class="type">
            
                
<span class="param-type">boolean</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                </td>
            

            <td class="description last"><p>Option for the BidiEngine</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>isOutputRtl</code></td>
            

            <td class="type">
            
                
<span class="param-type">boolean</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                </td>
            

            <td class="description last"><p>Option for the BidiEngine</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>isSymmetricSwapping</code></td>
            

            <td class="type">
            
                
<span class="param-type">boolean</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            
                <td class="default">
                
                </td>
            

            <td class="description last"><p>Option for the BidiEngine</p></td>
        </tr>

    
    </tbody>
</table>

            </td>
        </tr>

    

        <tr>
            
                <td class="name"><code>transform</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>
|

<span class="param-type"><a href="Matrix.html">Matrix</a></span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>If transform is a number the text will be rotated by this value around the anchor set by x and y.</p>
<p>If it is a Matrix, this matrix gets directly applied to the text, which allows shearing
effects etc.; the x and y offsets are then applied AFTER the coordinate system has been established by this
matrix. This means passing a rotation matrix that is equivalent to some rotation angle will in general yield a
DIFFERENT result. A matrix is only allowed in &quot;advanced&quot; API mode.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="triangle"><span class="type-signature"></span>triangle<span class="signature">(x1, y1, x2, y2, x3, y3, style<span class="signature-attributes">opt</span>)</span><span class="type-signature"> &rarr; {<a href="jsPDF.html">jsPDF</a>}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line4647">line 4647</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds a triangle to PDF.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        
        <th>Attributes</th>
        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>x1</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against left edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y1</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against upper edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>x2</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against left edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y2</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against upper edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>x3</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against left edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>y3</code></td>
            

            <td class="type">
            
                
<span class="param-type">number</span>


            
            </td>

            
                <td class="attributes">
                

                

                
                </td>
            

            

            <td class="description last"><p>Coordinate (in units declared at inception of PDF document) against upper edge of the page</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>style</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            
                <td class="attributes">
                
                    &lt;optional><br>
                

                

                
                </td>
            

            

            <td class="description last"><p>A string specifying the painting style or null. Valid styles include:
'S' [default] - stroke,
'F' - fill,
and 'DF' (or 'FD') -  fill then stroke.
In &quot;compat&quot; API mode, a null value postpones setting the style so that a shape may be composed using multiple
method calls. The last drawing method call used to define the shape should not have a null style argument.</p>
<p>In &quot;advanced&quot; API mode this parameter is deprecated.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type"><a href="jsPDF.html">jsPDF</a></span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="~addGState"><span class="type-signature">(inner) </span>addGState<span class="signature">(key, gState)</span><span class="type-signature"></span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5480">line 5480</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds a new Graphics State. Duplicates are automatically eliminated.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>key</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"><p>Might also be null, if no later reference to this gState is needed</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>gState</code></td>
            

            <td class="type">
            
                
<span class="param-type">Object</span>


            
            </td>

            

            

            <td class="description last"><p>The gState object</p></td>
        </tr>

    
    </tbody>
</table>



















        
            

    

    <h4 class="name" id="~addPattern"><span class="type-signature">(inner) </span>addPattern<span class="signature">(key, pattern)</span><span class="type-signature"></span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line1466">line 1466</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Adds a new pattern for later use.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>key</code></td>
            

            <td class="type">
            
                
<span class="param-type">String</span>


            
            </td>

            

            

            <td class="description last"><p>The key by it can be referenced later. The keys must be unique!</p></td>
        </tr>

    

        <tr>
            
                <td class="name"><code>pattern</code></td>
            

            <td class="type">
            
                
<span class="param-type">API.Pattern</span>


            
            </td>

            

            

            <td class="description last"><p>The pattern</p></td>
        </tr>

    
    </tbody>
</table>



















        
            

    

    <h4 class="name" id="~hasHotfix"><span class="type-signature">(inner) </span>hasHotfix<span class="signature">(hotfixName)</span><span class="type-signature"> &rarr; {boolean}</span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line3204">line 3204</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Used to see if a supplied hotfix was requested when the pdf instance was created.</p>
</div>











    <h5>Parameters:</h5>
    

<table class="params">
    <thead>
    <tr>
        
        <th>Name</th>
        

        <th>Type</th>

        

        

        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>
    

        <tr>
            
                <td class="name"><code>hotfixName</code></td>
            

            <td class="type">
            
                
<span class="param-type">string</span>


            
            </td>

            

            

            <td class="description last"><p>The name of the hotfix to check.</p></td>
        </tr>

    
    </tbody>
</table>
















<h5>Returns:</h5>

        


<dl class="param-type">
    <dt>
        Type
    </dt>
    <dd>
        
<span class="param-type">boolean</span>


    </dd>
</dl>

    



        
            

    

    <h4 class="name" id="~Point"><span class="type-signature">(inner) </span>Point<span class="signature">()</span><span class="type-signature"></span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5597">line 5597</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Point</p>
</div>




























        
            

    

    <h4 class="name" id="~Rectangle"><span class="type-signature">(inner) </span>Rectangle<span class="signature">()</span><span class="type-signature"></span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5640">line 5640</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>Rectangle</p>
</div>




























        
            

    

    <h4 class="name" id="~RenderTarget"><span class="type-signature">(inner) </span>RenderTarget<span class="signature">()</span><span class="type-signature"></span></h4>

    




<dl class="details">

    
    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="jspdf.js.html">jspdf.js</a>, <a href="jspdf.js.html#line5677">line 5677</a>
    </li></ul></dd>
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    
</dl>





<div class="description usertext">
    <p>FormObject/RenderTarget</p>
</div>




























        
    

    

    
</article>

</section>




    
    
</div>

<br class="clear">

<footer>
    Documentation generated by <a href="https://github.com/jsdoc3/jsdoc">JSDoc 3.6.4</a> on Fri Jan 28 2022 16:38:20 GMT+0100 (Central European Standard Time) using the <a href="https://github.com/clenemt/docdash">docdash</a> theme.
</footer>

<script>prettyPrint();</script>
<script src="scripts/polyfill.js"></script>
<script src="scripts/linenumber.js"></script>



</body>
</html>