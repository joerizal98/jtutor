<?php

class __Mustache_855ed4f6872409bfaa3140b2e60dea0f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="contact ';
        // 'selected' section
        $value = $context->find('selected');
        $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
        $buffer .= ' ';
        // 'lastmessage' section
        $value = $context->find('lastmessage');
        $buffer .= $this->section061e0788845066103d11eceffa08f060($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '     data-action="view-contact-msg"
';
        $buffer .= $indent . '     data-userid="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-messageid="';
        // 'messageid' section
        $value = $context->find('messageid');
        $buffer .= $this->sectionB0327789b04d3c3e162ab3345369548a($context, $indent, $value);
        $buffer .= '" data-region="contact" role="button"
';
        $buffer .= $indent . '     aria-pressed="';
        // 'selected' section
        $value = $context->find('selected');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        // 'selected' inverted section
        $value = $context->find('selected');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '" tabindex="0">
';
        $buffer .= $indent . '    <div class="picture">
';
        $buffer .= $indent . '        <img src="';
        $value = $this->resolveValue($context->find('profileimageurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" alt="" />
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="information">
';
        $buffer .= $indent . '        <div class="name">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        // 'showonlinestatus' section
        $value = $context->find('showonlinestatus');
        $buffer .= $this->section596838ae12aee7d77761f4343570e5b9($context, $indent, $value);
        $buffer .= $indent . '            <span ';
        // 'isblocked' inverted section
        $value = $context->find('isblocked');
        if (empty($value)) {
            
            $buffer .= 'class="hidden"';
        }
        $buffer .= ' data-region="contact-icon-blocked">
';
        $buffer .= $indent . '                ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section738208b6fa17fbbacbeeab10f06c775d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <p class="lastmessage" data-region="last-message-area">
';
        $buffer .= $indent . '            <span data-region="last-message-user">
';
        $buffer .= $indent . '                ';
        // 'sentfromcurrentuser' section
        $value = $context->find('sentfromcurrentuser');
        $buffer .= $this->section861f6e0a0727043f2b0bc352aef5e4cc($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '            <span data-region="last-message-text">
';
        // 'lastmessage' section
        $value = $context->find('lastmessage');
        $buffer .= $this->section8b300a6d7efb6bba831c701e3d261709($context, $indent, $value);
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="unread-count-container">
';
        $buffer .= $indent . '        <span data-region="unread-count" class="badge badge-important">';
        $value = $this->resolveValue($context->find('unreadcount'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
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
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section061e0788845066103d11eceffa08f060(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^isread}}unread{{/isread}}';
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
                
                // 'isread' inverted section
                $value = $context->find('isread');
                if (empty($value)) {
                    
                    $buffer .= 'unread';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0327789b04d3c3e162ab3345369548a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}{{isread}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $value = $this->resolveValue($context->find('isread'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
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
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c8c76cfaa6077f6cfe8912aa0533d99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="d-inline status online"';
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
                
                $buffer .= 'class="d-inline status online"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section802d41026a42950c9bc1e846101fecdc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' online, message ';
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
                
                $buffer .= ' online, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc0b28b9f3a235430c8245e02662984a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/online, core, {{#str}} online, message {{/str}} ';
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
                
                $buffer .= ' t/online, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section802d41026a42950c9bc1e846101fecdc($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section596838ae12aee7d77761f4343570e5b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div {{#isonline}}class="d-inline status online"{{/isonline}}{{^isonline}}class="hidden"{{/isonline}}>
                <span class="online-text" data-region="contact-icon-online">
                    {{#pix}} t/online, core, {{#str}} online, message {{/str}} {{/pix}}
                </span>
            </div>
            ';
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
                
                $buffer .= $indent . '            <div ';
                // 'isonline' section
                $value = $context->find('isonline');
                $buffer .= $this->section2c8c76cfaa6077f6cfe8912aa0533d99($context, $indent, $value);
                // 'isonline' inverted section
                $value = $context->find('isonline');
                if (empty($value)) {
                    
                    $buffer .= 'class="hidden"';
                }
                $buffer .= '>
';
                $buffer .= $indent . '                <span class="online-text" data-region="contact-icon-online">
';
                $buffer .= $indent . '                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionEc0b28b9f3a235430c8245e02662984a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a9d360275281af48c4314c1936fa21b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contactblocked, message ';
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
                
                $buffer .= ' contactblocked, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section738208b6fa17fbbacbeeab10f06c775d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/block, core, {{#str}} contactblocked, message {{/str}} ';
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
                
                $buffer .= ' t/block, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8a9d360275281af48c4314c1936fa21b($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5d9d9da4c925f338b8b4b42e3bad916(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'you, message';
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
                
                $buffer .= 'you, message';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section861f6e0a0727043f2b0bc352aef5e4cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}you, message{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD5d9d9da4c925f338b8b4b42e3bad916($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b300a6d7efb6bba831c701e3d261709(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{.}}
                ';
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
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
