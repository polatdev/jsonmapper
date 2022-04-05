<?php
/*
 * Copyright 2022 The JsonMapper Project
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Polat\JsonMapper\Exception;

use Polat\JsonMapper\JsonMapper;

/**
 * Means that there was a problem serializing or unserializing the object data.
 *
 * This specifically refers only to the `serialize()` and `unserialize()`
 * functions and the data or parameters they are processing. It's intended to
 * help you catch and detect problems with your specific raw data serialization.
 *
 * There may still be other exceptions thrown as well. Read the function docs.
 *
 * @copyright 2022 The JsonMapper Project
 * @license http://www.apache.org/licenses/LICENSE-2.0
 *
 * @see JsonMapper::serialize()
 * @see JsonMapper::unserialize()
 */
class LazySerializationException extends JsonMapperException
{
}
