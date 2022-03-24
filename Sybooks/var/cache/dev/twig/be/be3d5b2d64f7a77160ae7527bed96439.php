<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/livres.twig */
class __TwigTemplate_9d2ae466b37fe5cdbbde23d399878a50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/livres.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/livres.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/livres.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello Controller!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " <div class=\"container\">
        <div class=\"row\">
            <?php if (isset(\$_SESSION['role']) && \$_SESSION['role'] == '[\"admin\"]') : { ?>
                    <div class=\"cadre col-6 text-center\">
                        <form method=\"post\" action=\"indexaction.php\">
                            <div class=\"form-row mx-0 mt-3\">
                                <label for=\"titre\" class=\"col-4\">Titre :</label>
                                <input class=\"col-6\" type=\"text\" id=\"titre\" name=\"book_title\" value=\"<?= \$Ch_titre  ?>\" />
                            </div>
                            <div class=\"form-row mx-0\">
                                <label for=\"auteur\" class=\"col-4\">Auteur :</label>
                                <input class=\"col-6\" type=\"text\" id=\"auteur\" name=\"book_autor\" value=\"<?= \$Ch_auteur ?>\" />
                            </div>
                            <div class=\"form-row mx-0\">
                                <label for=\"datepub\" class=\"col-4\">Date de publication :</label>
                                <input class=\"col-6\" type=\"date\" id=\"datepub\" name=\"book_date_publi\" value=\"<?= \$Ch_datepubli ?>\" />
                            </div>
                            <div class=\"form-row mx-0\">
                                <label for=\"price\" class=\"col-4\">Prix :</label>
                                <input class=\"col-6\" type=\"text\" id=\"price\" name=\"book_price\" value=\"<?= \$Ch_prix ?>\" />
                            </div>
                            <div class=\"valide text-center\">
                                <?php if (isset(\$_POST['update'])) : { ?>
                                        <button class='btn btn-warning btn-sm col-8 offset-1' type=\"submit\" name=\"upbook\" value=\"<?= \$Ch_id ?>\">Modifier un livre</button><br>
                                    <?php }
                                else : { ?>
                                        <button class='btn btn-success btn-sm col-8 offset-1' type=\"submit\" name=\"insert\">Ajouter un livre</button><br>
                                <?php }
                                endif; ?>
                            </div>
                        </form>

                    </div>
                    <div class=\"cadre col-6 text-center\">
                        <form method=\"post\" action=\"indexaction.php\">
                            <div class=\"form-row mt-3\">
                                <button class='btn btn-sm col-6 archive' type=\"submit\" name=\"all_archived\">Archiver la collection</button>
                            </div>
                        </form>
                        <form method=\"post\">
                            <div class=\"form-row mx-0 archive\">
                                <button class='btn btn-sm col-6 archive' type=\"submit\" name=\"unarchived\">Désarchiver des livres</button>
                            </div>
                        </form>

                        ";
        // line 75
        echo "                    </div>
            <?php }
            endif; ?>
            <div class=\"entete text-center col-12\">
                <div class=\"row\">
                    <h4 class=\"col-11\">Nombre de livres : <?= \$nbreLivres  ?> </h4>
                    <h6 class=\"col-1\">(<?= \$nbreLivresArch ?> archivés)</h6>
                </div>
            </div>

            <table class=\"text-center\">
                <tr class=\"col-12\">
                    <th class=\"col-1\">Numéro</th>
                    <th class=\"col-3\">Titre</th>
                    <th class=\"col-2\">Auteur</th>
                    <th class=\"col-2\">Date de publication</th>
                    <th class=\"col-4\">Actions</th>
                </tr>
                <?php foreach (\$all as \$book) {
                    if (\$book['isarchived'] == 0) : { ?>
                            <tr class=\"col-12 \">
                                <td class=\"col-1\"><?= \$book['id'] ?></td>
                                <td class=\"col-3\"><?= \$book['titre'] ?></td>
                                <td class=\"col-2\"><?= \$book['auteur'] ?></td>
                                <td class=\"col-2\"><?= \$book['datepub'] ?></td>
                                <td class=\"col-4\">
                                    <div class=\"BtnList row\">
                                        <?php if (isset(\$_SESSION['role']) && \$_SESSION['role'] == '[\"admin\"]') : { ?>
                                                <form method=\"post\" class=\"col-3\">
                                                    <button class='btn btn-info btn-sm col-12' type=\"submit\" name=\"update\" value=\"<?= \$book['id'] ?>\">Editer </button>
                                                </form>
                                                <form action=\"indexaction.php\" method=\"post\" class=\"col-3\">
                                                    <button class='btn btn-secondary btn-sm col-12' type=\"submit\" name=\"archive\" value=\"<?= \$book['id'] ?>\">Archiver</button>
                                                </form>
                                                <form action=\"indexaction.php\" method=\"post\" class=\"col-3\">
                                                    <button class='btn btn-danger btn-sm col-12' type=\"submit\" name=\"delete\" value=\"<?= \$book['id'] ?>\">Supprimer</button>
                                                </form>
                                                <form action=\"commande.php\" method=\"post\" class=\"col-3\">
                                                    <button class='btn btn-success btn-sm col-12' type=\"submit\" name=\"commander\" value=\"<?= \$book['id'] ?>\">Commander</button>
                                                </form>
                                            <?php }
                                        elseif (isset(\$_SESSION['role']) && \$_SESSION['role'] == '[\"membre\"]') : { ?>
                                                <form action=\"commande.php\" method=\"post\" class=\"col-12 text-center\">
                                                    <button class='btn btn-success btn-sm col-6' type=\"submit\" name=\"commander\" value=\"<?= \$book['id'] ?>\">Commander</button>
                                                </form>
                                            <?php }
                                        else : { ?>
                                                <form action=\"login.php\" method=\"post\" class=\"col-12 text-center\">
                                                    <button class='btn btn-success btn-sm col-6' type=\"submit\" name=\"commander\" value=\"<?= \$book['id'] ?>\">Commander</button>
                                                </form>
                                        <?php }
                                        endif;
                                        ?>
                                    </div>
                                </td>
                            </tr>
                <?php }
                    endif;
                } ?>
            </table>
        </div>
    </div>
  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/livres.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 75,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello Controller!{% endblock %}

{% block body %}
 <div class=\"container\">
        <div class=\"row\">
            <?php if (isset(\$_SESSION['role']) && \$_SESSION['role'] == '[\"admin\"]') : { ?>
                    <div class=\"cadre col-6 text-center\">
                        <form method=\"post\" action=\"indexaction.php\">
                            <div class=\"form-row mx-0 mt-3\">
                                <label for=\"titre\" class=\"col-4\">Titre :</label>
                                <input class=\"col-6\" type=\"text\" id=\"titre\" name=\"book_title\" value=\"<?= \$Ch_titre  ?>\" />
                            </div>
                            <div class=\"form-row mx-0\">
                                <label for=\"auteur\" class=\"col-4\">Auteur :</label>
                                <input class=\"col-6\" type=\"text\" id=\"auteur\" name=\"book_autor\" value=\"<?= \$Ch_auteur ?>\" />
                            </div>
                            <div class=\"form-row mx-0\">
                                <label for=\"datepub\" class=\"col-4\">Date de publication :</label>
                                <input class=\"col-6\" type=\"date\" id=\"datepub\" name=\"book_date_publi\" value=\"<?= \$Ch_datepubli ?>\" />
                            </div>
                            <div class=\"form-row mx-0\">
                                <label for=\"price\" class=\"col-4\">Prix :</label>
                                <input class=\"col-6\" type=\"text\" id=\"price\" name=\"book_price\" value=\"<?= \$Ch_prix ?>\" />
                            </div>
                            <div class=\"valide text-center\">
                                <?php if (isset(\$_POST['update'])) : { ?>
                                        <button class='btn btn-warning btn-sm col-8 offset-1' type=\"submit\" name=\"upbook\" value=\"<?= \$Ch_id ?>\">Modifier un livre</button><br>
                                    <?php }
                                else : { ?>
                                        <button class='btn btn-success btn-sm col-8 offset-1' type=\"submit\" name=\"insert\">Ajouter un livre</button><br>
                                <?php }
                                endif; ?>
                            </div>
                        </form>

                    </div>
                    <div class=\"cadre col-6 text-center\">
                        <form method=\"post\" action=\"indexaction.php\">
                            <div class=\"form-row mt-3\">
                                <button class='btn btn-sm col-6 archive' type=\"submit\" name=\"all_archived\">Archiver la collection</button>
                            </div>
                        </form>
                        <form method=\"post\">
                            <div class=\"form-row mx-0 archive\">
                                <button class='btn btn-sm col-6 archive' type=\"submit\" name=\"unarchived\">Désarchiver des livres</button>
                            </div>
                        </form>

                        {# {% if (isset(\$_POST['unarchived'])) : {
                                \$sql = \"SELECT * FROM book WHERE isarchived=1\";
                                \$result = mysqli_query(\$conn, \$sql);
                                \$archive = mysqli_fetch_all(\$result, MYSQLI_ASSOC); %}
                                <div class=\"text-center\">
                                    <?php if (!empty(\$archive)) : { ?>
                                            <form method=\"post\" action=\"indexaction.php\" class=\"archive\">
                                                <select name=\"choixlivre\" id=\"book_select\" class=\"col-12\">
                                                    <option>--Choisir un livre--</option>
                                                    <?php
                                                    foreach (\$archive as \$choice) { ?>
                                                        <option value=\"<?= \$choice['id'] ?>\"><?= \$choice['titre'] ?></option>
                                                    <?php } ?>
                                                </select>
                                                <button class='btn btn-sm col-12 archive' type=\"submit\" name=\"unarchivedbook\" value=\"<?= \$choice['id'] ?>\">Désarchiver le livre</button>
                                            </form>
                                        <?php }
                                    else : { ?>
                                            <p>Aucun livre archivé !</p>
                                    <?php }
                                    endif; ?>
                                </div>
                       {%
                        endif; %} #}
                    </div>
            <?php }
            endif; ?>
            <div class=\"entete text-center col-12\">
                <div class=\"row\">
                    <h4 class=\"col-11\">Nombre de livres : <?= \$nbreLivres  ?> </h4>
                    <h6 class=\"col-1\">(<?= \$nbreLivresArch ?> archivés)</h6>
                </div>
            </div>

            <table class=\"text-center\">
                <tr class=\"col-12\">
                    <th class=\"col-1\">Numéro</th>
                    <th class=\"col-3\">Titre</th>
                    <th class=\"col-2\">Auteur</th>
                    <th class=\"col-2\">Date de publication</th>
                    <th class=\"col-4\">Actions</th>
                </tr>
                <?php foreach (\$all as \$book) {
                    if (\$book['isarchived'] == 0) : { ?>
                            <tr class=\"col-12 \">
                                <td class=\"col-1\"><?= \$book['id'] ?></td>
                                <td class=\"col-3\"><?= \$book['titre'] ?></td>
                                <td class=\"col-2\"><?= \$book['auteur'] ?></td>
                                <td class=\"col-2\"><?= \$book['datepub'] ?></td>
                                <td class=\"col-4\">
                                    <div class=\"BtnList row\">
                                        <?php if (isset(\$_SESSION['role']) && \$_SESSION['role'] == '[\"admin\"]') : { ?>
                                                <form method=\"post\" class=\"col-3\">
                                                    <button class='btn btn-info btn-sm col-12' type=\"submit\" name=\"update\" value=\"<?= \$book['id'] ?>\">Editer </button>
                                                </form>
                                                <form action=\"indexaction.php\" method=\"post\" class=\"col-3\">
                                                    <button class='btn btn-secondary btn-sm col-12' type=\"submit\" name=\"archive\" value=\"<?= \$book['id'] ?>\">Archiver</button>
                                                </form>
                                                <form action=\"indexaction.php\" method=\"post\" class=\"col-3\">
                                                    <button class='btn btn-danger btn-sm col-12' type=\"submit\" name=\"delete\" value=\"<?= \$book['id'] ?>\">Supprimer</button>
                                                </form>
                                                <form action=\"commande.php\" method=\"post\" class=\"col-3\">
                                                    <button class='btn btn-success btn-sm col-12' type=\"submit\" name=\"commander\" value=\"<?= \$book['id'] ?>\">Commander</button>
                                                </form>
                                            <?php }
                                        elseif (isset(\$_SESSION['role']) && \$_SESSION['role'] == '[\"membre\"]') : { ?>
                                                <form action=\"commande.php\" method=\"post\" class=\"col-12 text-center\">
                                                    <button class='btn btn-success btn-sm col-6' type=\"submit\" name=\"commander\" value=\"<?= \$book['id'] ?>\">Commander</button>
                                                </form>
                                            <?php }
                                        else : { ?>
                                                <form action=\"login.php\" method=\"post\" class=\"col-12 text-center\">
                                                    <button class='btn btn-success btn-sm col-6' type=\"submit\" name=\"commander\" value=\"<?= \$book['id'] ?>\">Commander</button>
                                                </form>
                                        <?php }
                                        endif;
                                        ?>
                                    </div>
                                </td>
                            </tr>
                <?php }
                    endif;
                } ?>
            </table>
        </div>
    </div>
  
{% endblock %}", "main/livres.twig", "C:\\Users\\Lenovo\\Documents\\AFCI DWWM\\ProSymf\\Sybooks\\templates\\main\\livres.twig");
    }
}
