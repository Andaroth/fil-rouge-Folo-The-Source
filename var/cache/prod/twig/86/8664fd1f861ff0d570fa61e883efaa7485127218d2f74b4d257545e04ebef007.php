<?php

/* OChomePageBundle:Default:contact.html.twig */
class __TwigTemplate_78539421fa48cb2f7773a000c7c87b17a28a5084852780533a9bbd8b993ad035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--<?php
/*if ( // Si le formulaire est reçu
  (isset(\$_POST['name'])) &&
  (isset(\$_POST['mail'])) &&
  (isset(\$_POST['message']))
) 
{
  \$getpost = true; // Activer un booléen et ensuite : 
  \$mail = filter_var(\$_POST['mail'], FILTER_SANITIZE_EMAIL); // Nettoyer l'adresse des caract. interdits
  if (!filter_var(\$_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    // Si le mail n'est pas valid
    \$mailsent = false;
    \$feedback = \"<span>Your mail is not valid...</span>\";
  } else {
    // Si la page contient les informations du POST && si elles sont valides
    \$name = htmlentities(addslashes(\$_POST['name'])); // ++ de sécurité anti inject
    \$mail = htmlentities(addslashes(\$mail)); 
    \$msg = htmlentities(addslashes(filter_var(\$_POST['mail'], FILTER_SANITIZE_EMAIL)));
    // Indiquer envoyer le mail
    \$mailsent = true;
    \$feedback = \"<span>Your message is in the sendbox, waiting for this script to work</span>\";
  }
} // endif*/
?>-->";
        // line 24
        $this->loadTemplate("OChomePageBundle:Default:begin.html.twig", "OChomePageBundle:Default:contact.html.twig", 24)->display($context);
        // line 25
        $this->loadTemplate("OChomePageBundle:Default:topbar.html.twig", "OChomePageBundle:Default:contact.html.twig", 25)->display($context);
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 81
        $this->loadTemplate("OChomePageBundle:Default:footer.html.twig", "OChomePageBundle:Default:contact.html.twig", 81)->display($context);
        // line 82
        $this->loadTemplate("OChomePageBundle:Default:end.html.twig", "OChomePageBundle:Default:contact.html.twig", 82)->display($context);
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "  <div class=\"parallax-container h-200\">
    <div class=\"parallax\"><img src=\"./img/inauguration.jpg\" alt=\"Nature 5\"></div>
  </div>
  <div class=\"row container\">
    <h2>Contact me</h2>
    <div class=\"card col s12 m6\">
      <address>
        <div class=\"card-content\">
          <h3>Where to find me</h3>
          <ul>
            <li><i class=\"material-icons\">place</i> Rue Victor Rauter, 143<br>&horbar; 1070 BRUSSELS</li>
            <li><i class=\"material-icons\">phone</i> (+32) 2 318 55 81</li>
            <li><i class=\"material-icons\">mail</i> contact@nfalykouyate.com</li>
          </ul>
        </div>
        <div class=\"card-action\">
          <a href=\"#mailing\">Send me a mail</a>
        </div>
      </address>
    </div>
    <div class=\"col s12 m6\">
      <iframe
       src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.852813597105!2d4.306633515930707!3d50.83389016754236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c41e7805c859%3A0xbef1db11ef462c98!2sRue+Victor+Rauter+143%2C+1070+Anderlecht!5e0!3m2!1sfr!2sbe!4v1517236104791\" 
       width=\"100%\" 
       height=\"315\"
       frameborder=\"0\" 
       style=\"border:0\"> 
      </iframe>
    </div>
  </div>
  <div class=\"parallax-container h-300\">
    <div class=\"parallax\"><img src=\"./img/presentation.jpg\" alt=\"Nature 4\"></div>
  </div>
  <div id=\"mailing\" class=\"mailing orange darken-4 pt-25 mb-0 row scrollspy\">
    <form class=\"container\" action=\"contact.php\" method=\"post\">
      <h2>Drop me a line</h2>
      <div class=\"row\">
        <div class=\"col s12 m6\">
          <label for=\"name\">Name</label>
          <input placeholder=\"Name\" id=\"name\" name=\"name\" type=\"text\" class=\"validate\">
          <label for=\"mail\">Mail</label>
          <input placeholder=\"Mail\" id=\"mail\" name=\"mail\" type=\"text\" class=\"validate\">
        </div>
        <div class=\"col s12 m6\">
          <label for=\"message\">Your message</label>
          <textarea id=\"message\" name=\"message\" class=\"materialize-textarea textarea1\"></textarea>
        </div>
      </div>
      <div class=\"row center-align\">
        <input type=\"submit\" class=\"center-align waves-effect waves-light btn deep-orange darken-4\">
      </div>
    </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 27,  57 => 26,  53 => 82,  51 => 81,  49 => 26,  47 => 25,  45 => 24,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OChomePageBundle:Default:contact.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/contact.html.twig");
    }
}
