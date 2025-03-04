<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use PHPUnit\Event\Code;
use PHPUnit\Event\Emitter;
use PHPUnit\Framework\Constraint;
use PHPUnit\Framework\TestResult;
use PHPUnit\Framework\TestSuite;
use SebastianBergmann\CodeCoverage\CodeCoverage;
use SebastianBergmann\GlobalState\Snapshot;

final class NullEmitter implements Emitter
{
    public function testRunnerStarted(): void
    {
    }

    public function testRunnerFinished(): void
    {
    }

    public function assertionMade(mixed $value, Constraint\Constraint $constraint, string $message, bool $hasFailed): void
    {
    }

    public function bootstrapFinished(string $filename): void
    {
    }

    public function comparatorRegistered(string $className): void
    {
    }

    public function extensionLoaded(string $name, string $version): void
    {
    }

    public function globalStateCaptured(Snapshot $snapshot): void
    {
    }

    public function globalStateModified(Snapshot $snapshotBefore, Snapshot $snapshotAfter, string $message): void
    {
    }

    public function globalStateRestored(Snapshot $snapshot): void
    {
    }

    public function testErrored(Code\Test $test, string $message): void
    {
    }

    public function testFailed(Code\Test $test, string $message): void
    {
    }

    public function testFinished(Code\Test $test): void
    {
    }

    public function testPassed(Code\Test $test): void
    {
    }

    public function testPassedWithWarning(Code\Test $test, string $message): void
    {
    }

    public function testPassedButRisky(Code\Test $test, string $message): void
    {
    }

    public function testSkippedByDataProvider(Code\ClassMethod $testMethod, string $message): void
    {
    }

    public function testAbortedWithMessage(Code\Test $test, string $message): void
    {
    }

    public function testSkippedDueToUnsatisfiedRequirements(Code\ClassMethod $testMethod, string ...$missingRequirements): void
    {
    }

    public function testSkippedWithMessage(Code\Test $test, string $message): void
    {
    }

    public function testPrepared(Code\Test $test): void
    {
    }

    public function testAfterTestMethodFinished(string $testClassName, Code\ClassMethod ...$calledMethods): void
    {
    }

    public function testAfterLastTestMethodFinished(string $testClassName, Code\ClassMethod ...$calledMethods): void
    {
    }

    public function testBeforeFirstTestMethodCalled(string $testClassName, Code\ClassMethod $calledMethod): void
    {
    }

    public function testBeforeFirstTestMethodFinished(string $testClassName, Code\ClassMethod ...$calledMethods): void
    {
    }

    public function testBeforeTestMethodCalled(string $testClassName, Code\ClassMethod $calledMethod): void
    {
    }

    public function testBeforeTestMethodFinished(string $testClassName, Code\ClassMethod ...$calledMethods): void
    {
    }

    public function testPreConditionCalled(string $testClassName, Code\ClassMethod $calledMethod): void
    {
    }

    public function testPreConditionFinished(string $testClassName, Code\ClassMethod ...$calledMethods): void
    {
    }

    public function testPostConditionCalled(string $testClassName, Code\ClassMethod $calledMethod): void
    {
    }

    public function testPostConditionFinished(string $testClassName, Code\ClassMethod ...$calledMethods): void
    {
    }

    public function testAfterTestMethodCalled(string $testClassName, Code\ClassMethod $calledMethod): void
    {
    }

    public function testAfterLastTestMethodCalled(string $testClassName, Code\ClassMethod $calledMethod): void
    {
    }

    public function testMockObjectCreated(string $className): void
    {
    }

    public function testMockObjectCreatedForTrait(string $traitName): void
    {
    }

    public function testMockObjectCreatedForAbstractClass(string $className): void
    {
    }

    public function testMockObjectCreatedFromWsdl(
        string $wsdlFile,
        string $originalClassName,
        string $mockClassName,
        array $methods,
        bool $callOriginalConstructor,
        array $options
    ): void {
    }

    public function testPartialMockObjectCreated(string $className, string ...$methodNames): void
    {
    }

    public function testTestProxyCreated(string $className, array $constructorArguments): void
    {
    }

    public function testTestStubCreated(string $className): void
    {
    }

    public function testSuiteLoaded(TestSuite $testSuite): void
    {
    }

    public function testSuiteSorted(int $executionOrder, int $executionOrderDefects, bool $resolveDependencies): void
    {
    }

    public function testSuiteStarted(string $name): void
    {
    }

    public function testSuiteFinished(string $testSuiteName, TestResult $result, ?CodeCoverage $codeCoverage): void
    {
    }
}
