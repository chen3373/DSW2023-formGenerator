<?php 
    require_once 'Renderizable.php';
    require_once 'Element.php';
    require_once 'Form.php';
    require_once 'Field.php';
    require_once 'SimpleField.php';
    require_once 'MultipleField.php';
    require_once 'Document.php';
    require_once 'Paragraph.php';

    $form1 = new Form("validate.php","Prueba Formulario","get");

    $SimpleField1 = new SimpleField("nombre","text",'Escribe el nombre');
    $form1->add($SimpleField1);
    $form1->add(new SimpleField("edad","number",'¿Que edad tienes?','18'));
    $form1->add(new SimpleField("color","color",'¿Cuál es tu color preferido?','#00FFFF'));
    $form1->add(new SimpleField("suscripcion","checkbox",'¿quieres suscribirte?','true'));
    $options = [
        "Desarrollo en entorno servidor"=>"DSW",
        "Desarrollo en entorno cliente"=>"DEW",
        "Despliegue de aplicaciones web"=>"DPL",
    ];
     $multipleField1 = new MultipleField('preferido','radio','¿cuál es tu módulo preferido?', 'Despliegue de aplicaciones web', $options);
    $form1->add($multipleField1);
    $multipleField1->addOption('Diseño de interfaces web', 'DOR');

    $parrafo1 = new Paragraph('hola mundo');


    $document = new Document('prueba documento');
    $document->add($parrafo1);
    $document->add($form1);
    $document->add($parrafo1);
    $document->add(new SimpleField("nombre2","text",'Escribe el nombre2'));
    $document->render();

?>
