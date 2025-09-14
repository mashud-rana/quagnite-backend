<?php

namespace Database\Seeders;

use App\Constants\GlobalConstant;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Playground;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use GC;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Playgrounds questions and options Seeding

        # Python Questions Start (1)--------------------

        $python = Playground::where('type', PlAYGD_PYTHON)->first();

        $question = $python->questions()->create([
            'title' => '<p>Python is a ___object-oriented programming language.</p>',
            'answer' => 'b',
            'hint' => 'Lorem ipsum',
            'explanation' => 'Lorem ipsum'

        ]);

        $playOptions = [
            [
                'title' => 'Special purpose',
                'option' => 'a',
            ],
            [
                'title' => 'General purpose',
                'option' => 'b',
            ],
            [
                'title' => 'Medium level programming language',
                'option' => 'c',
            ],
            [
                'title' => 'All of the mentioned above',
                'option' => 'd',
            ],
        ];

        foreach ($playOptions as $option) {
            $question->options()->create($option);
        }

        # Python Questions Start (2)--------------------

        $question = $python->questions()->create([
            'title' => '<p>What will be the output of the following code snippet?</p>
                        <code>print(2**3 + (5 + 6)**(1 + 1))</code>',
            'answer' => 'a',
            'hint' => 'Lorem ipsum',
            'explanation' => 'Lorem ipsum'

        ]);

        $playOptions = [
            [
                'title' => '129',
                'option' => 'a',
            ],
            [
                'title' => '8',
                'option' => 'b',
            ],
            [
                'title' => '128',
                'option' => 'c',
            ],
            [
                'title' => 'None of the above',
                'option' => 'd',
            ],
        ];

        foreach ($playOptions as $option) {
            $question->options()->create($option);
        }

        # Python Questions End--------------------

        # Go Questions Start (1)--------------------
        $go = Playground::where('type', PlAYGD_GO)->first();

        $question = $go->questions()->create([
            'title' => '<p> What are the advantages of GO? </p>',
            'answer' => 'd',
            'hint' => 'Lorem ipsum',
            'explanation' => 'Lorem ipsum'
        ]);

        $playOptions = [
            [
                'title' => 'GO compiles very quickly',
                'option' => 'a',
            ],
            [
                'title' => 'Go supports concurrency at the language level',
                'option' => 'b',
            ],
            [
                'title' => 'Functions are firstclass objects in GO',
                'option' => 'c',
            ],
            [
                'title' => 'All of these',
                'option' => 'd',
            ]
        ];

        foreach ($playOptions as $option) {
            $question->options()->create($option);
        }

        # Go Questions Start (2)--------------------

        $question = $go->questions()->create([
            'title' => '<p>What is the output of the following code snippet?</p>
                        <code>
<pre>
package main
import "fmt"
func main() {
x := 1
y := &x

fmt.Println(*y)

*y = 2
fmt.Println(x)
}
</pre>
                     </code>',
            'answer' => 'b',
            'hint' => 'Lorem ipsum',
            'explanation' => 'Lorem ipsum'

        ]);

        $playOptions = [
            [
                'title' => '18',
                'option' => 'a',
            ],
            [
                'title' => '12',
                'option' => 'b',
            ],
            [
                'title' => '15',
                'option' => 'c',
            ],
            [
                'title' => '27',
                'option' => 'd',
            ],
        ];

        foreach ($playOptions as $option) {
            $question->options()->create($option);
        }

        # Go Questions End--------------------


        # Java Questions Start (1)--------------------

        $java = Playground::where('type', PlAYGD_JAVA)->first();

        $question = $java->questions()->create([
            'title' => '<p> What is the range of data type byte in Java? </p>',
            'answer' => 'a',
            'hint' => 'Byte occupies 8 bits in memory.',
            'explanation' => 'Lorem ipsum'

        ]);

        $playOptions = [
            [

                'title' => '-128 to 127',
                'option' => 'a',
            ],
            [

                'title' => '-32768 to 32767',
                'option' => 'b',
            ],
            [

                'title' => '-2147483648 to 2147483647',
                'option' => 'c',
            ],
            [

                'title' => 'None of the mentioned',
                'option' => 'd',
            ],
        ];

        foreach ($playOptions as $option) {
            $question->options()->create($option);
        }

        # java Questions Start (2)--------------------

        $question = $java->questions()->create([
            'title' => '<p>What is the output of the following code snippet?</p>
                            <code>
<pre>
class increment {
    public static void main(String args[])
    {
        int g = 3;
        System.out.print(++g * 8);
    }
}
</pre>
                            </code>',
            'answer' => 'a',
            'hint' => 'Lorem ipsum',
            'explanation' => 'Lorem ipsum'

        ]);

        $playOptions = [
            [

                'title' => '32',
                'option' => 'a',
            ],
            [

                'title' => '33',
                'option' => 'b',
            ],
            [

                'title' => '24',
                'option' => 'c',
            ],
            [

                'title' => '25',
                'option' => 'd',
            ],
        ];

        foreach ($playOptions as $option) {
            $question->options()->create($option);
        }

        # java Questions End--------------------

        # bash Questions Start (1)--------------------

        $bash = Playground::where('type', PlAYGD_BASH)->first();

        $question = $bash->questions()->create([
            'title' => '<p> Which command identifies the resource of a command? </p>',
            'answer' => 'a',
            'hint' => 'Lorem ipsum',
            'explanation' => 'Lorem ipsum'
        ]);

        $playOptions = [
            [

                'title' => 'type',
                'option' => 'a',
            ],
            [

                'title' => 'typeset',
                'option' => 'b',
            ],
            [

                'title' => 'select',
                'option' => 'c',
            ],
            [

                'title' => 'source',
                'option' => 'd',
            ],
        ];

        foreach ($playOptions as $option) {
            $question->options()->create($option);
        }

        # bash Questions Start (2)--------------------

        $question = $bash->questions()->create([
            'title' => '<p>What is the output of the following code snippet?</p>
                            <code>
<pre>
a=2
b=4
let c=a**b
echo $c
exit 0
</pre>
                            </code>',
            'answer' => 'b',
            'hint' => 'Lorem ipsum',
            'explanation' => 'Lorem ipsum'

        ]);

        $playOptions = [
            [

                'title' => '8',
                'option' => 'a',
            ],
            [

                'title' => '16',
                'option' => 'b',
            ],
            [

                'title' => '32',
                'option' => 'c',
            ],
            [

                'title' => '64',
                'option' => 'd',
            ],
        ];

        foreach ($playOptions as $option) {
            $question->options()->create($option);
        }

        # bash Questions End--------------------

    }
}
