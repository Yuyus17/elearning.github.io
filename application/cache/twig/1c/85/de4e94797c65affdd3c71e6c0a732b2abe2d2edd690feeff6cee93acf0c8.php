<?php

/* install-step-3.html */
class __TwigTemplate_1c85de4e94797c65affdd3c71e6c0a732b2abe2d2edd690feeff6cee93acf0c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Install - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
    <div class=\"module span8 offset2\">
            <div class=\"module-head\">
                <span class=\"pull-right\"><b>Step 3 : </b>Pengaturan data</span>
                <h3>Install e-learning</h3>
            </div>

            <div class=\"module-body\">
                <div class=\"well well-small\" style=\"box-shadow: none;\">
                    Atur Kelas dan Matapelajaran yang ada di sekolah. Kelas dan Matapelajaran masih dapat diubah.
                </div>
                <form method=\"post\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, site_url("setup/index/3"), "html", null, true);
        echo "\">
                    <div class=\"row-fluid\">
                        <div class=\"span4\">
                            <b>Kelas</b>
                            <hr style=\"margin-top: 5px; margin-bottom: 5px;\">                            
                            <ul class=\"unstyled\">
                                <li>
                                    KELAS X
                                    <ul class=\"unstyled\" style=\"margin-left: 20px;\">
                                        <li>
                                            <label>
                                                <input type=\"checkbox\" name=\"kelas[X][]\" ";
        // line 30
        echo twig_escape_filter($this->env, set_checkbox("kelas[X][]", "TKJ 1", true), "html", null, true);
        echo " value=\"TKJ 1\" style=\"margin-top: -5px;\"> KELAS X - TKJ 1
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type=\"checkbox\" name=\"kelas[X][]\" ";
        // line 35
        echo twig_escape_filter($this->env, set_checkbox("kelas[X][]", "TKJ 2", true), "html", null, true);
        echo " value=\"TKJ 2\" style=\"margin-top: -5px;\"> KELAS X - TKJ 2
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type=\"checkbox\" name=\"kelas[X][]\" ";
        // line 40
        echo twig_escape_filter($this->env, set_checkbox("kelas[X][]", "TKJ 3", true), "html", null, true);
        echo " value=\"TKJ 3\" style=\"margin-top: -5px;\"> KELAS X - TKJ 3
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    KELAS XI
                                    <ul class=\"unstyled\" style=\"margin-left: 20px;\">
                                        <li>
                                            <label>
                                                <input type=\"checkbox\" name=\"kelas[XI][]\" ";
        // line 50
        echo twig_escape_filter($this->env, set_checkbox("kelas[XI][]", "TKJ 1", true), "html", null, true);
        echo " value=\"TKJ 1\" style=\"margin-top: -5px;\"> KELAS XI - TKJ 1
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type=\"checkbox\" name=\"kelas[XI][]\" ";
        // line 55
        echo twig_escape_filter($this->env, set_checkbox("kelas[XI][]", "TKJ 2", true), "html", null, true);
        echo " value=\"TKJ 2\" style=\"margin-top: -5px;\"> KELAS XI - TKJ 2
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type=\"checkbox\" name=\"kelas[XI][]\" ";
        // line 60
        echo twig_escape_filter($this->env, set_checkbox("kelas[XI][]", "TKJ 3", true), "html", null, true);
        echo " value=\"TKJ 3\" style=\"margin-top: -5px;\"> KELAS XI - TKJ 3
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    KELAS XII
                                    <ul class=\"unstyled\" style=\"margin-left: 20px;\">
                                        <li>
                                            <label>
                                                <input type=\"checkbox\" name=\"kelas[XII][]\" ";
        // line 70
        echo twig_escape_filter($this->env, set_checkbox("kelas[XII][]", "TKJ 1", true), "html", null, true);
        echo " value=\"TKJ 1\" style=\"margin-top: -5px;\"> KELAS XII - TKJ 1
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type=\"checkbox\" name=\"kelas[XII][]\" ";
        // line 75
        echo twig_escape_filter($this->env, set_checkbox("kelas[XII][]", "TKJ 2", true), "html", null, true);
        echo " value=\"TKJ 2\" style=\"margin-top: -5px;\"> KELAS XII - TKJ 3
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type=\"checkbox\" name=\"kelas[XII][]\" ";
        // line 80
        echo twig_escape_filter($this->env, set_checkbox("kelas[XII][]", "TKJ 3", true), "html", null, true);
        echo " value=\"TKJ 3\" style=\"margin-top: -5px;\"> KELAS XII - TKJ 3
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            
                        </div>
                        <div class=\"span8\">
                            <b>Matapelajaran</b>
                            <hr style=\"margin-top: 5px; margin-bottom: 5px;\">
                            <ul class=\"unstyled\">
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 94
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Administrasi Infrastruktur Jaringan (AIJ)", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Administrasi Infrastruktur Jaringan (AIJ)\" style=\"margin-top: -5px;\"> Administrasi Infrastruktur Jaringan (AIJ)
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 99
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "BAdministrasi Sistem Jaringan (ASJ)", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Administrasi Sistem Jaringan (ASJ)\" style=\"margin-top: -5px;\"> Administrasi Sistem Jaringan (ASJ)
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 104
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Bahasa Indonesia", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Bahasa Indonesia\" style=\"margin-top: -5px;\"> Bahasa Indonesia
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 109
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Bahasa Inggris", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Bahasa Inggris\" style=\"margin-top: -5px;\"> Bahasa Inggris
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 114
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Bahasa Jawa", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Bahasa Jawa\" style=\"margin-top: -5px;\"> Bahasa Jawa
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 119
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Bimbingan Konseling", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Bimbingan Konseling\" style=\"margin-top: -5px;\"> Bimbingan Konseling
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 124
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Dasar Program Keahlian (TKJ)", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Dasar Program Keahlian (TKJ)\" style=\"margin-top: -5px;\"> Dasar Program Keahlian (TKJ)
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 129
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Informatika", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Informatika\" style=\"margin-top: -5px;\"> Informatika
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 134
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Matematika", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Matematika\" style=\"margin-top: -5px;\"> Matematika
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 138
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Pendidikan Agama Islam", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Pendidikan Agama Islam\" style=\"margin-top: -5px;\"> Pendidikan Agama Islam
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 143
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Pendidikan Pancasila dan Kewarganegaraan", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Pendidikan Pancasila dan Kewarganegaraan\" style=\"margin-top: -5px;\"> Pendidikan Pancasila dan Kewarganegaraan
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 148
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Penjasorkes", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Penjasorkes\" style=\"margin-top: -5px;\"> Penjasorkes
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 153
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Produk Kreatif dan Kewirausahaan", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Produk Kreatif dan Kewirausahaan\" style=\"margin-top: -5px;\"> Produk Kreatif dan Kewirausahaan
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 158
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Projek IPAS", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Projek IPAS\" style=\"margin-top: -5px;\"> Projek IPAS
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 163
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Sejarah Indonesia", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Sejarah Indonesia\" style=\"margin-top: -5px;\"> Sejarah Indonesia
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 168
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Seni Budaya", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Seni Budaya\" style=\"margin-top: -5px;\"> Seni Budaya
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 173
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Teknologi Jaringan Berbasis Luas (WAN)", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Teknologi Jaringan Berbasis Luas (WAN)\" style=\"margin-top: -5px;\"> Teknologi Jaringan Berbasis Luas (WAN)
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type=\"checkbox\" ";
        // line 178
        echo twig_escape_filter($this->env, set_checkbox("mapel[]", "Teknologi Layanan Jaringan", true), "html", null, true);
        echo " name=\"mapel[]\" value=\"Teknologi Layanan Jaringan\" style=\"margin-top: -5px;\"> Teknologi Layanan Jaringan
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <button class=\"btn btn-primary\" type=\"submit\">Simpan</button>
                </form>
            </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "install-step-3.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 178,  287 => 173,  279 => 168,  271 => 163,  263 => 158,  255 => 153,  247 => 148,  239 => 143,  231 => 138,  224 => 134,  216 => 129,  208 => 124,  200 => 119,  192 => 114,  184 => 109,  176 => 104,  168 => 99,  160 => 94,  143 => 80,  135 => 75,  127 => 70,  114 => 60,  106 => 55,  98 => 50,  85 => 40,  77 => 35,  69 => 30,  55 => 19,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
