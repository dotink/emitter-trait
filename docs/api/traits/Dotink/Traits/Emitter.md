# Emitter
## The emitter trait, consistent callbacks for "events"

_Copyright (c) 2012, Matthew J. Sahagian_.
_Please reference the LICENSE.txt file at the root of this distribution_

#### Namespace

`Dotink\Traits`

#### Imports

<table>

	<tr>
		<th>Alias</th>
		<th>Namespace / Class</th>
	</tr>
	
	<tr>
		<td>Flourish</td>
		<td>Dotink\Flourish</td>
	</tr>
	
</table>

#### Authors

<table>
	<thead>
		<th>Name</th>
		<th>Handle</th>
		<th>Email</th>
	</thead>
	<tbody>
	
		<tr>
			<td>
				Matthew J. Sahagian
			</td>
			<td>
				mjs
			</td>
			<td>
				msahagian@dotink.org
			</td>
		</tr>
	
	</tbody>
</table>

## Properties

### Instance Properties
#### <span style="color:#6a6e3d;">$listeners</span>

A list of listening callbacks, keyed by signal




## Methods

### Instance Methods
<hr />

#### <span style="color:#3e6a6e;">on()</span>

Register a callback to listen for a particular signal

###### Parameters

<table>
	<thead>
		<th>Name</th>
		<th>Type(s)</th>
		<th>Description</th>
	</thead>
	<tbody>
			
		<tr>
			<td>
				$signal
			</td>
			<td>
									<a href="http://www.php.net/language.types.string.php">string</a>
				
			</td>
			<td>
				The signal to listen for
			</td>
		</tr>
					
		<tr>
			<td>
				$callback
			</td>
			<td>
									callable				
			</td>
			<td>
				The callback to call when emitted
			</td>
		</tr>
			
	</tbody>
</table>

###### Returns

<dl>
	
		<dt>
			Object
		</dt>
		<dd>
			The object, for method chaining
		</dd>
	
</dl>


<hr />

#### <span style="color:#3e6a6e;">emit()</span>

Call all listeners of a given signal

###### Parameters

<table>
	<thead>
		<th>Name</th>
		<th>Type(s)</th>
		<th>Description</th>
	</thead>
	<tbody>
			
		<tr>
			<td>
				$signal
			</td>
			<td>
									<a href="http://www.php.net/language.types.string.php">string</a>
				
			</td>
			<td>
				The signal to emit
			</td>
		</tr>
			
	</tbody>
</table>

###### Returns

<dl>
	
		<dt>
			Object
		</dt>
		<dd>
			The object, for method chaining
		</dd>
	
</dl>






