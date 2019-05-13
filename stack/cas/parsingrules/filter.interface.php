<?php
// This file is part of Stack - https://stack.maths.ed.ac.uk
//
// Stack is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Stack is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Stack.  If not, see <http://www.gnu.org/licenses/>.

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../../maximaparser/MP_classes.php');

interface stack_cas_astfilter {

    /**
     * Does whatever it needs to the AST and may append to the errors or notes
     * might receive stack_cas_casstring directly, but better to keep these 
     * separate.
     */
    public function filter(MP_Node $ast, array &$errors, array &$answernotes): MP_Node;

}