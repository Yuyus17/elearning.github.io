<?php

/* register.html */
class __TwigTemplate_a048c89d8c00368fbe92b8d46ae5043d41acbdbb64fb2aaeee71d759a1453bb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-public.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-public.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Register - ";
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
                <h3>Register E-learning</h3>
            </div>

            <div class=\"module-body\">
                ";
        // line 15
        echo get_flashdata("register");
        echo "

                ";
        // line 17
        if ((!twig_test_empty(get_pengaturan("info-registrasi", "value")))) {
            // line 18
            echo "                <div class=\"well well-small\" style=\"box-shadow: none;\">
                    <b>Informasi : </b><br>
                    ";
            // line 20
            echo get_pengaturan("info-registrasi", "value");
            echo "
                </div>
                ";
        }
        // line 23
        echo "
                <ul class=\"nav nav-tabs\">
                    ";
        // line 25
        if ((get_pengaturan("registrasi-siswa", "value") == 1)) {
            // line 26
            echo "                    <li ";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "siswa")) ? ("class=\"active\"") : (""));
            echo "><a href=\"#register-siswa\" data-toggle=\"tab\">Sebagai siswa</a></li>
                    ";
        }
        // line 28
        echo "
                    ";
        // line 29
        if ((get_pengaturan("registrasi-pengajar", "value") == 1)) {
            // line 30
            echo "                    <li ";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "pengajar")) ? ("class=\"active\"") : (""));
            echo "><a href=\"#register-pengajar\" data-toggle=\"tab\">Sebagai pengajar</a></li>
                    ";
        }
        // line 32
        echo "                </ul>

                <div class=\"tab-content\">
                    ";
        // line 35
        if ((get_pengaturan("registrasi-siswa", "value") == 1)) {
            // line 36
            echo "                    <div class=\"tab-pane fade ";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "siswa")) ? ("active") : (""));
            echo " in\" id=\"register-siswa\">
                        ";
            // line 37
            echo form_open_multipart("login/register/siswa", array("class" => "form-horizontal row-fluid"));
            echo "
                            <div class=\"control-group\">
                                <label class=\"control-label\">NIS</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"nis\" name=\"nis\" class=\"span4\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, set_value("nis"), "html", null, true);
            echo "\">
                                    <br>";
            // line 42
            echo form_error("nis");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Nama <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"nama\" class=\"span8\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
            echo "\">
                                    <br>";
            // line 49
            echo form_error("nama");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Jenis Kelamin <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\" ";
            // line 55
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
            echo "> Laki-laki</label>
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\" ";
            // line 56
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
            echo "> Perempuan</label>
                                    <br>";
            // line 57
            echo form_error("jenis_kelamin");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Kelas <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <select class=\"span3\" name=\"kelas_id\">
                                        <option value=\"\">--pilih--</option>
                                        ";
            // line 65
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 66
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_select("kelas_id", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id")), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                    </select>
                                    <br>";
            // line 69
            echo form_error("kelas_id");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tempat Lahir</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"tempat_lahir\" class=\"span5\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
            echo "\">
                                    <br>";
            // line 76
            echo form_error("tempat_lahir");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tanggal Lahir</label>
                                <div class=\"controls\">
                                    <select class=\"span2\" style=\"width: 10%;\" name=\"tgl_lahir\">
                                        <option value=\"\">Tgl</option>
                                        ";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 85
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                                    </select>
                                    <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                                        <option value=\"\">Bulan</option>
                                        ";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 91
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                                    </select>
                                    <input type=\"text\" name=\"thn_lahir\" class=\"span2\" maxlength=\"4\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
            echo "\" placeholder=\"Tahun\">
                                    <br>";
            // line 95
            echo form_error("thn_lahir");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Agama</label>
                                <div class=\"controls\">
                                    <select name=\"agama\" class=\"span2\">
                                        <option value=\"\">--pilih--</option>
                                        <option value=\"ISLAM\" ";
            // line 103
            echo twig_escape_filter($this->env, set_select("agama", "ISLAM"), "html", null, true);
            echo ">ISLAM</option>
                                        <option value=\"KRISTEN\" ";
            // line 104
            echo twig_escape_filter($this->env, set_select("agama", "KRISTEN"), "html", null, true);
            echo ">KRISTEN</option>
                                        <option value=\"KATOLIK\" ";
            // line 105
            echo twig_escape_filter($this->env, set_select("agama", "KATOLIK"), "html", null, true);
            echo ">KATOLIK</option>
                                        <option value=\"HINDU\" ";
            // line 106
            echo twig_escape_filter($this->env, set_select("agama", "HINDU"), "html", null, true);
            echo ">HINDU</option>
                                        <option value=\"BUDHA\" ";
            // line 107
            echo twig_escape_filter($this->env, set_select("agama", "BUDHA"), "html", null, true);
            echo ">BUDHA</option>
                                    </select>
                                    <br>";
            // line 109
            echo form_error("agama");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Alamat</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"alamat\" class=\"span8\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
            echo "\">
                                    <br>";
            // line 116
            echo form_error("alamat");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Username <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"username\" name=\"username\" class=\"span5\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
            echo "\" placeholder=\"alamat email\">
                                    <br>";
            // line 123
            echo form_error("username");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password\" class=\"span5\" value=\"";
            // line 129
            echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
            echo "\">
                                    <br>";
            // line 130
            echo form_error("password");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Ulangi Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password2\" class=\"span5\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
            echo "\">
                                    <br>";
            // line 137
            echo form_error("password2");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Register</button>
                                </div>
                            </div>
                        ";
            // line 145
            echo form_close();
            echo "
                    </div>
                    ";
        }
        // line 148
        echo "
                    ";
        // line 149
        if ((get_pengaturan("registrasi-pengajar", "value") == 1)) {
            // line 150
            echo "                    <div class=\"tab-pane fade ";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "pengajar")) ? ("active") : (""));
            echo " in\" id=\"register-pengajar\">
                        ";
            // line 151
            echo form_open_multipart("login/register/pengajar", array("class" => "form-horizontal row-fluid"));
            echo "
                            <div class=\"control-group\">
                                <label class=\"control-label\">NIP</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"nip\" name=\"nip\" class=\"span4\" value=\"";
            // line 155
            echo twig_escape_filter($this->env, set_value("nip"), "html", null, true);
            echo "\">
                                    <br>";
            // line 156
            echo form_error("nip");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Nama <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"nama\" class=\"span8\" value=\"";
            // line 162
            echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
            echo "\">
                                    <br>";
            // line 163
            echo form_error("nama");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Jenis Kelamin <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\" ";
            // line 169
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
            echo "> Laki-laki</label>
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\" ";
            // line 170
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
            echo "> Perempuan</label>
                                    <br>";
            // line 171
            echo form_error("jenis_kelamin");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tempat Lahir</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"tempat_lahir\" class=\"span5\" value=\"";
            // line 177
            echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
            echo "\">
                                    <br>";
            // line 178
            echo form_error("tempat_lahir");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tanggal Lahir</label>
                                <div class=\"controls\">
                                    <select class=\"span2\" style=\"width: 10%;\" name=\"tgl_lahir\">
                                        <option value=\"\">Tgl</option>
                                        ";
            // line 186
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 187
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                                    </select>
                                    <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                                        <option value=\"\">Bulan</option>
                                        ";
            // line 192
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 193
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "                                    </select>
                                    <input type=\"text\" name=\"thn_lahir\" class=\"span2\" maxlength=\"4\" value=\"";
            // line 196
            echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
            echo "\" placeholder=\"Tahun\">
                                    <br>";
            // line 197
            echo form_error("thn_lahir");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Alamat</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"alamat\" class=\"span10\" value=\"";
            // line 203
            echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
            echo "\">
                                    <br>";
            // line 204
            echo form_error("alamat");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Username <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"username\" name=\"username\" class=\"span5\" value=\"";
            // line 210
            echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
            echo "\" placeholder=\"alamat email\">
                                    <br>";
            // line 211
            echo form_error("username");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password\" class=\"span5\" value=\"";
            // line 217
            echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
            echo "\">
                                    <br>";
            // line 218
            echo form_error("password");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Ulangi Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password2\" class=\"span5\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
            echo "\">
                                    <br>";
            // line 225
            echo form_error("password2");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Register</button>
                                </div>
                            </div>
                        ";
            // line 233
            echo form_close();
            echo "
                    </div>
                    ";
        }
        // line 236
        echo "
                </div>
            </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 236,  530 => 233,  519 => 225,  515 => 224,  506 => 218,  502 => 217,  493 => 211,  489 => 210,  480 => 204,  476 => 203,  467 => 197,  463 => 196,  460 => 195,  447 => 193,  443 => 192,  438 => 189,  425 => 187,  421 => 186,  410 => 178,  406 => 177,  397 => 171,  393 => 170,  389 => 169,  380 => 163,  376 => 162,  367 => 156,  363 => 155,  356 => 151,  351 => 150,  349 => 149,  346 => 148,  340 => 145,  329 => 137,  325 => 136,  316 => 130,  312 => 129,  303 => 123,  299 => 122,  290 => 116,  286 => 115,  277 => 109,  272 => 107,  268 => 106,  264 => 105,  260 => 104,  256 => 103,  245 => 95,  241 => 94,  238 => 93,  225 => 91,  221 => 90,  216 => 87,  203 => 85,  199 => 84,  188 => 76,  184 => 75,  175 => 69,  172 => 68,  159 => 66,  155 => 65,  144 => 57,  140 => 56,  136 => 55,  127 => 49,  123 => 48,  114 => 42,  110 => 41,  103 => 37,  98 => 36,  96 => 35,  91 => 32,  85 => 30,  83 => 29,  80 => 28,  74 => 26,  72 => 25,  68 => 23,  62 => 20,  58 => 18,  56 => 17,  51 => 15,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
