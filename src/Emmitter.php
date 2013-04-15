<?php namespace Dotink\Traits
{
	use Dotink\Flourish;

	/**
	 * The emitter trait, consistent callbacks for "events"
	 *
	 * @copyright Copyright (c) 2012, Matthew J. Sahagian
	 * @author Matthew J. Sahagian [mjs] <msahagian@dotink.org>
	 *
	 * @license Please reference the LICENSE.txt file at the root of this distribution
	 *
	 * @package Dotink\Traits
	 * @uses Dotink\Flourish\ProgrammerException
	 */
	trait Emitter
	{
		/**
		 * A list of listening callbacks, keyed by signal
		 *
		 * @access private
		 * @var array
		 */
		private $listeners = array();


		/**
		 * Register a callback to listen for a particular signal
		 *
		 * @access public
		 * @param string $signal The signal to listen for
		 * @param callable $callback The callback to call when emitted
		 * @return Object The object, for method chaining
		 */
		public function on($signal, callable $callback)
		{
			$signal = strtolower($signal);

			if (!isset($this->listeners[$signal])) {
				$this->listeners[$signal] = array();
			}

			$this->listeners[$signal][] = $callback;

			return $this;
		}


		/**
		 * Call all listeners of a given signal
		 *
		 * @access public
		 * @param string $signal The signal to emit
		 * @return Object The object, for method chaining
		 */
		public function emit($signal)
		{
			$signal = strtolower($signal);

			if (!isset($this->listeners[$signal])) {
				return;
			}

			foreach ($this->listeners[$signal] as $callback) {
				call_user_func_array($callback, array_slize(func_get_args(), 1));
			}

			return $this;
		}
	}
}
