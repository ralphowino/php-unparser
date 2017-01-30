<?php
declare(strict_types=1);

/** a comment before the namespace comment **/
namespace foo\bar {
  use foo {
    // sample code
    baz,
    // with alias
    bar as fooBar
  };
  use bar as nsBar;

  // generic constant
  const FOOBAR = 'foo & bar';

  /**
   * a class
   */
  abstract class fooBar implements fooBaz {
    use Line;
    const FOOBAR = 'BARFOO';
    protected $dwarf = [
      'sneezy' => 'achoum',
      'bashful' => 'tadah'
    ];
    /**
     * Something is done here
     */
    final public function doSomething() {
      // do not wanna do
      foreach($this->dwarf as $name => $greeting) {
        echo "Hey ho $name, $greeting !";
      }
      throw new \ComeToHome('Thats it');
    }
  }

  interface Miror extends Object {
    public function Am_I_Uggly() : bool;
    protected function broken() : bool;
    static protected function isWhiteSnowAlive() : bool;
  }

  trait Line {
    public function draw(bool $arrow = false) : string {
      switch($this->style) {
        case 'dot':
        case 'point':
          $body = '......';
          break;
        default:
          $body = '-----';
          break;
      }
      return $body . ($arrow ? '>' : '');
    }
    private function shuut() {
      return null;
    }
  }

  // this is SPARTA !
  function sparta() : int {
    global $persians;

    $index = -1;
next:
    $guy = $persians[++$index];
    if(rand(0, 10)>5) {
      $guy->kill();
    } else {
      $guy->kick();
    }
    if ($index < count($persians)) goto next;

    return 300;
  }

  $foo = function(?int $bar = 42) use($something) : bool {
    static $banana;
    if($bar > fooBar::NUMBAR) {
      while($bar) {
        if ((int)calculateMeaningOfLife() === 42) {
          break;
        } else continue;
      }
      do {
        echo "Caesar: here I was\n";
      } while(false);
    } else if ($something instanceof Banana) {
      try {
        $bipbip = clone $something;
        $bipbip->crazy()->boom([1, 2, 3]);
      } catch(Coco|Nut $ex) {
        $ex->printStackTrace();
      } finally {
        return (new class extends fooBar {
          function goatIt() {
            return "meeeh";
          }
        })->goatIt();
      }
    } else {
      for($i = 0; $i < count($banana); $i++) {
        $x %= ($i * 2) / ($i - 1);
        $what = $banana[$i] ? 'yes!': 'noo!';
      }
      return false;
    }
    return empty(namespace\FOOBAR);
  };

  die($foo());
  eval("return 'This is madness!';");

}