<?php

class __Mustache_c729c9c9fab4bf2b0ccee7e7058b3fe3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card activity-navigation">
';
        $buffer .= $indent . '    <div class="card-body">
';
        $buffer .= $indent . '        ';
        if ($parent = $this->mustache->loadPartial('core/columns-1to1to1')) {
            $context->pushBlockContext(array(
                'column1' => array($this, 'block8480028ec0b7c93b753c16c594dcd01b'),
                'column2' => array($this, 'blockF2088366309363d2eb59095e31123727'),
                'column3' => array($this, 'block207802690ae3cb416e7b5c7b1ec7f192'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section490440062d62727ec9d762c45f0157fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/action_link }}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF38cbdd58a4e67e3cb86ecb5ee6001b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/url_select }}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block8480028ec0b7c93b753c16c594dcd01b($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <div class="float-left">
';
        $buffer .= $indent . '                    ';
        // 'prevlink' section
        $value = $context->find('prevlink');
        $buffer .= $this->section490440062d62727ec9d762c45f0157fb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }

    public function blockF2088366309363d2eb59095e31123727($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                <div class="mdl-align">
';
        $buffer .= $indent . '                    ';
        // 'activitylist' section
        $value = $context->find('activitylist');
        $buffer .= $this->sectionF38cbdd58a4e67e3cb86ecb5ee6001b3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }

    public function block207802690ae3cb416e7b5c7b1ec7f192($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                <div class="float-right">
';
        $buffer .= $indent . '                    ';
        // 'nextlink' section
        $value = $context->find('nextlink');
        $buffer .= $this->section490440062d62727ec9d762c45f0157fb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }
}
