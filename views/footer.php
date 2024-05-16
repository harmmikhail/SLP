<?php
class Footer {
  public $offset;
  private $style_path = "/public/footer.css";

  public function __construct($offset) {
    $this->offset = $offset;
  }

  public function render() {
    echo "<footer style=\"position:absolute;top:{$this->offset}px;\">
      <link href=\"$this->style_path\" type=\"text/css\" rel=\"stylesheet\"/>
      <!-- Footer background -->
      <div id=\"u21\" class=\"ax_default box_2\">
        <div id=\"u21_div\" class=\"\"></div>
        <div id=\"u21_text\" class=\"text \" style=\"display:none; visibility: hidden\">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u22\" class=\"ax_default heading_2\">
        <div id=\"u22_div\" class=\"\"></div>
        <div id=\"u22_text\" class=\"text \">
          <p><span>Про FluentUkrainian</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u23\" class=\"ax_default heading_2\">
        <div id=\"u23_div\" class=\"\"></div>
        <div id=\"u23_text\" class=\"text \">
          <p><span>Соціальні мережі</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u24\" class=\"ax_default heading_2\">
        <div id=\"u24_div\" class=\"\"></div>
        <div id=\"u24_text\" class=\"text \">
          <p><span>Застосунок</span></p>
        </div>
      </div>

      <!-- Unnamed (Line) -->
      <div id=\"u25\" class=\"ax_default line1\">
        <img id=\"u25_img\" class=\"img \" src=\"/pages/images/shop_list/u25.svg\"/>
        <div id=\"u25_text\" class=\"text \" style=\"display:none; visibility: hidden\">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u26\" class=\"ax_default heading_2\">
        <div id=\"u26_div\" class=\"\"></div>
        <div id=\"u26_text\" class=\"text \">
          <p><span>Підтримка</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u27\" class=\"ax_default label\">
        <div id=\"u27_div\" class=\"\"></div>
        <div id=\"u27_text\" class=\"text \">
          <p><span>© 2024 FluentUkrainian. Всі права захищені.</span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id=\"u28\" class=\"ax_default icon\">
        <img id=\"u28_img\" class=\"img \" src=\"/pages/images/shop_list/u28.svg\"/>
        <div id=\"u28_text\" class=\"text \" style=\"display:none; visibility: hidden\">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id=\"u29\" class=\"ax_default icon\">
        <img id=\"u29_img\" class=\"img \" src=\"/pages/images/shop_list/u29.svg\"/>
        <div id=\"u29_text\" class=\"text \" style=\"display:none; visibility: hidden\">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id=\"u30\" class=\"ax_default icon\">
        <img id=\"u30_img\" class=\"img \" src=\"/pages/images/shop_list/u30.svg\"/>
        <div id=\"u30_text\" class=\"text \" style=\"display:none; visibility: hidden\">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u31\" class=\"ax_default label\">
        <div id=\"u31_div\" class=\"\"></div>
        <div id=\"u31_text\" class=\"text \">
          <p><span>Facebook</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u32\" class=\"ax_default label\">
        <div id=\"u32_div\" class=\"\"></div>
        <div id=\"u32_text\" class=\"text \">
          <p><span>Instagram</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u33\" class=\"ax_default label\">
        <div id=\"u33_div\" class=\"\"></div>
        <div id=\"u33_text\" class=\"text \">
          <p><span>Telegram</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u34\" class=\"ax_default label\">
        <div id=\"u34_div\" class=\"\"></div>
        <div id=\"u34_text\" class=\"text \">
          <p><span><a href=\"homepage\" class=\"link_hidden\">Освітній проєкт</a></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u35\" class=\"ax_default label\">
        <div id=\"u35_div\" class=\"\"></div>
        <div id=\"u35_text\" class=\"text \">
          <p><span>Підтримка</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u36\" class=\"ax_default label\">
        <div id=\"u36_div\" class=\"\"></div>
        <div id=\"u36_text\" class=\"text \">
          <p><span><a href=\"learning_materials\" class=\"link_hidden\">Навчальні матеріали</a></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u37\" class=\"ax_default label\">
        <div id=\"u37_div\" class=\"\"></div>
        <div id=\"u37_text\" class=\"text \">
          <p><span>Питання та відповіді</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u38\" class=\"ax_default label\">
        <div id=\"u38_div\" class=\"\"></div>
        <div id=\"u38_text\" class=\"text \">
          <p><span>Детальніше</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id=\"u39\" class=\"ax_default label\">
        <div id=\"u39_div\" class=\"\"></div>
        <div id=\"u39_text\" class=\"text \">
          <p><span><a href=\"teachers_list\" class=\"link_hidden\">Викладачі</a></span></p>
        </div>
      </div>
    </footer>";
  }
}
?>