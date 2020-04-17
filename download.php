<? include "_head.php" ?>

<p>Current version of perl-cross is 1.3.3<br>
Supported perl versions: perl-5.22.4, perl-5.24.4, perl-5.26.2, perl-5.28.2 perl-5.30.2, cperl-5.24.3, cperl-5.26.1.<br>
Download it here:</p>
<div class="dllink">
	<a href="https://github.com/arsv/perl-cross/releases/download/1.3.3/perl-cross-1.3.3.tar.gz"
	 >https://github.com/arsv/perl-cross/releases/download/1.3.3/perl-cross-1.3.3.tar.gz</a>
</div>

<p>To use, unpack over an appropriate perl distribution, overwriting the original Makefile.<br>
Use one of supported perl versions; there are version-specific patches inside.</p>

<p>For older releases, check <a href="https://github.com/arsv/perl-cross/tree/releases">GitHub releases
branch</a>.</p>

<h2>Changelog</h2>

<ul>
	<li>1.3.3 (2020-04-17)<ul>
		<li>fix static module handling issue introduced in 1.3.2</li>
	</ul></li>

	<li>1.3.2 (2020-03-21)<ul>
		<li>perl-5.30.2, perl-5.31.10</li>
		<li>mainline perl compatible extensions lists in config.sh</li>
		<li>Yocto related fixes</li>
	</ul></li>

	<li>1.3.1 (2019-11-22)<ul>
		<li>perl-5.30.1, perl-5.31.6</li>
		<li>updated config.sub and config.guess</li>
	</ul></li>

	<li>1.3 (2019-05-25)<ul>
		<li>perl-5.30.0</li>
	</ul></li>

	<li>1.2.3 (2019-04-21)<ul>
		<li>perl-5.28.2, perl-5.29.10</li>
	</ul></li>

	<li>1.2.2 (2019-01-28)<ul>
		<li>multiple Makefile fixes for parallel builds</li>
		<li>testpack fix that wasn't included in 1.2.1</li>
		<li>perl-5.29.7</li>
	</ul></li>

	<li>1.2.1 (2018-12-02)<ul>
		<li>perl-5.28.1, perl-5.29.3</li>
		<li>some fixes for Darwin-based builds</li>
	</ul></li>

	<li>1.2 (2018-06-27)<ul>
		<li>perl-5.28.0, perl-5.29.0</li>
		<li>fixed Config.pl dependencies affecting some parallel builds</li>
	</ul></li>

	<li>1.1.9 (2018-04-16)<ul>
		<li>perl-5.27.{7,8,9,10}, 5.26.2, 5.24.4</li>
		<li>fixed gcc-7 detection</li>
		<li>fix for static modules building as dynamic in some perl versions</li>
	</ul></li>

	<li>1.1.8 (2017-10-29)<ul>
		<li>perl-5.27.5</li>
		<li>fix for lib.pm dependency issue potentially affecting all
                    static/no-dynaloader builds</li>
		<li>fix for perl_langinfo.h including config.h unconditionally</li>
	</ul></li>

	<li>1.1.7 (2017-09-26)<ul>
		<li>perl-5.27.4, perl-5.26.1, perl-5.24.3</li>
		<li>cperl-5.26.1</li>
		<li>support for -Duserelocatableinc</li>
	</ul></li>

	<li>1.1.6 (2017-07-17)<ul>
		<li>perl-5.22.4, cperl-5.24.2</li>
	</ul></li>

	<li>1.1.5 (2017-06-06)<ul>
		<li>perl-5.26.0, cperl-5.26.0</li>
	</ul></li>

	<li>1.1.4 (2017-02-13)<ul>
		<li>perl-5.22.3</li>
		<li>signal names fix</li>
	</ul></li>

	<li>1.1.3 (2017-01-23)<ul>
		<li>perl-5.24.1, perl-5.25.9, cperl-5.25.1</li>
		<li>common patches in cnf/diffs/ are now symlinked to a single copy</li>
	</ul></li>

	<li>1.1.2 (2017-01-03)<ul>
		<li>use64bitint should work properly now</li>
		<li>Fixed SysV message queues detection</li>
		<li>Fixed timezone issues due to skipped tzset</li>
		<li>perl-5.25.8 and cperl-5.24.2</li>
	</ul></li>

	<li>1.1.1 (2016-10-10)<ul>
		<li>Fixed long double handling for targets without long doubles</li>
		<li>Restored CCFLAGS and LDFLAGS capture from environment</li>
		<li>config.sh values cleanup to pass all tests</li>
		<li>Changes in installed perl binary names: versioned binaries
		like <tt>perl5.24.0</tt> are not installed anymore;
		for cperl builds, <tt>perl -&gt; cperl</tt> symlink added.</li>
	</ul></li>

	<li>1.1.0 (2016-09-12)<ul>
		<li>Major code cleanup</li>
		<li>Package name changed to <tt>perl-cross-N.M.tar.gz</tt></li>
		<li>Support for multiple perl versions</li>
		<li>Experimental cperl support</li>
		<li>General list of config.sh variables (configure_genc.sh) removed;<br>
			values are now written to config.sh immediately</li>
		<li>bash is no longer necessary to run configure;<br>
			dash or busybox sh should be enough</li>
		<li>Extended -A support removed (prepend and such)</li>
		<li>Build host info (cf_by, cf_email etc) is no longer passed to config.sh</li>
		<li>Various test fixes, and some new tests</li>
		<li>Hints re-arranged, support for compiler hints removed</li>
		<li>Newer gcc get -fwrapv -fno-strict-aliasing in ccflags</li>
	</ul></li>

	<li>1.0.3 (2016-06-30)<ul>
		<li>perl-5.24.0</li>
		<li>Android detection and proper osname</li>
		<li>Errno.pm building fixed for Android</li>
		<li>fixed rpath handling in presence of --sysroot</li>
		<li>busybox sed may be used now instead of GNU sed</li>
	</ul></li>

	<li>1.0.2 (2015-12-15)<ul>
		<li>perl-5.22.1</li>
		<li>Berkeley DB detection fix (DB::File)</li>
	</ul></li>

	<li>1.0.1 (2015-11-03)<ul>
		<li>poisoned paths patch from Buildroot</li>
		<li>disable gcc built-ins to avoid false positives in hasfunc</li>
		<li>proper escaping for values written to config.sh</li>
	</ul></li>

	<li>1.0.0 (2015-08-26)<ul>
		<li>perl-5.22.0</li>
		<li>floating-point functions detection and minor updates</li>
		<li>absolutely nothing special about this release</li>
	</ul></li>

	<li>0.9.7 (2015-06-28)<ul>
		<li>MakeMaker library detection fixes</li>
		<li>better --no-dynaloader / --all-static options handling</li>
	</ul></li>

	<li>0.9.6 (2015-03-07)<ul>
		<li>a2p yacc invocation suppressed for 5.20.2 sources</li>
	</ul></li>

	<li>0.9.5 (2015-02-24)<ul>
		<li>perl 5.20.2</li>
		<li>--sysroot handling fixed</li>
	</ul></li>

	<li>0.9.4 (2014-11-04)<ul>
		<li>--all-static fix</li>
	</ul></li>

	<li>0.9.3 (2014-10-14)<ul>
		<li>perl 5.20.1</li>
		<li>bigendian target byteorder detection fix</li>
	</ul></li>

	<li>0.9.2 (2014-09-20)<ul>
		<li>minor updates to handle perl 5.20.1-RC1</li>
		<li>soname'd libperl installation</li>
	</ul></li>

	<li>0.9.1 (2014-08-26)<ul>
		<li>module cleanup for 5.20.0</li>
		<li>host-installed miniperl stuff removed</li>
	</ul></li>

	<li>0.9 (2014-08-01)<ul>
		<li>perl-5.20.0</li>
	</ul></li>

	<li>0.8.5 (2014-02-23)<ul>
		<li>out-of-source builds with absolute path to the source</li>
		<li>patch --follow-symlinks is not used anymore</li>
	</ul></li>

	<li>0.8.4 (2014-02-20)<ul>
		<li>variable/versioned libperl.so</li>
		<li>out-of-source building support</li>
		<li>default paths fixed (sitescript/vendorscript)</li>
		<li>some Makefile fixes</li>
		<li>project moved to GitHub</li>
	</ul></li>

	<li>0.8.3 (2013-10-19)<ul>
		<li>Testpack for on-target testing</li>
		<li>$extensions, ${static,dynamic,nonxs}_ext format changed to match Configure</li>
		<li>$sharepath default fixed</li>
	</ul></li>

	<li>0.8.2 (2013-09-09)<ul>
		<li>NV-related tests added</li>
		<li>C++ and ELF format test added</li>
		<li>largefile flags are now passed correctly to tests &amp; modules</li>
		<li>$ccdefines variable dropped in favor of $ccflags</li>
		<li>hint files handling changed</li>
		<li>config.sh variables list updated to match current Configure closely</li>
		<li>--with-*, --host-* options handling fixed</li>
	</ul></li>

	<li>0.8.1 (2013-09-05)<ul>
		<li>perl-5.18.1 (with no changes to perl-cross)</li>
		<li>test-related fixes</li>
	</ul></li>

	<li>0.8 (2013-08-08)<ul>
		<li>perl-5.18.0</li>
		<li>module stubs are provided for ExtUtils::* to make them usable with miniperl</li>
		<li>patch application is now done as a bulk phony target;
			patching the files in-place doen't translate well into make-dependencies</li>
		<li>module paths fixes</li>
		<li>Makefile dependencies cleaned up</li>
	</ul></li>

	<li>0.7.4 (2013-04-11)<ul>
		<li>shared libperl support; enable with -Duseshrplib</li>
		<li>nv_preserves_uv stuff reset to safe defaults; it can't be tested for currently, but at least it won't cause precision issues</li>
	</ul></li>

	<li>0.7.3 (2013-04-05)<ul>
		<li>libs/perllibs split, and libswanted handling fixes; NDBM is properly linked now</li>
		<li>standard format for extensions lists in $Config</li>
		<li>install paths adjusted to match mainline perl</li>
		<li>$libpth default value added, DynaLoader::dl_findfile should work now</li>
		<li>drop-in replacement for Digest::MD5, calling Digest::Perl::MD5; no need to alter existing scripts anymore</li>
		<li>patched Liblist now warns about non-usable libraries (and passes relevant tests)</li>
		<li>minor config.sh tweaks</li>
	</ul></li>

	<li>0.7.2 (2013-03-25)<ul>
		<li>perl-5.16.3</li>
		<li>preliminary "make test" support (native builds only for now)</li>
		<li>specifying --mode manually should work as expected in most cases</li>
		<li>various configure/Makefile fixes</li>
	</ul></li>

	<li>0.7.1 (2012-12-15)<ul>
		<li>use gcc for dynalinking modules</li>
	</ul></li>

	<li>0.7 (2012-07-06)<ul>
		<li>perl-5.16.0</li>
		<li>original perl files are now patched (vs. supplying modified versions)</li>
		<li>Digest::Perl::MD5 added to allow using install{perl,man} with miniperl</li>
		<li>Module name handling fixed in make_ext_Makefile.pl</li>
		<li>archlib is now $prefix/lib/perl/$archname, instead of just $prefix/lib/perl/arch</li>
		<li>d_csh set to undef, to prevent glob() failures</li>
		<li>useithreads and use5005threads handling added</li>
	</ul></li>

	<li>0.6.5 (2012-02-16)<ul>
		<li>inttypes.h added in byte order test</li>
	</ul></li>

	<li>0.6.4 (2011-12-05)<ul>
		<li>/bin/sh changed to /bin/bash, take 2</li>
	</ul></li>

	<li>0.6.3 (2011-11-02)<ul>
		<li>perl-5.14.2 (without any actual changes to perl-cross)</li>
		<li>/bin/sh changed to /bin/bash everywhere</li>
	</ul></li>
		
	<li>0.6.2 (2011-09-03)<ul>
		<li>Android and Intel CC builds support</li>
		<li>--sysroot is now passed to compiler/linker</li>
		<li>target specifications not recognized by config.sub are allowed</li>
		<li>several configure tests fixes</li>
		<li>no-DynaLoader configuration support</li>
	</ul></li>

	<li>0.6.1 (2011-08-24)<ul>
		<li>static modules handling fixed</li>
		<li>--all-static option for configure</li>
	</ul></li>

	<li>0.6 (2011-08-20)<ul>
		<li>perl-5.14 support</li>
		<li>make rules to build disabled modules</li>
		<li>hints switched to flat directory style, added compiler and mode hints</li>
		<li>libswanted handling fixed</li>
		<li>configure now reads patchlevel.h to get perl version</li>
		<li>minor fixes &amp; cleanup</li>
	</ul></li>

	<li>0.5 (2011-07-23)<ul>
		<li>need_va_copy bug fixed (this is what caused build errors on x86_64)</li>
		<li>configure can now load configuration from a file (-f, -O)</li>
		<li>support for most of the original Configure options (inc. -D, -U, -A)</li>
		<li>--set/-D now allow passing arbitrary variables to config.sh</li>
		<li>make rules to track MakeMaker dependencies</li>
		<li>ccflags/ldflags support fixed</li>
		<li>-DEBUGGING support added</li>
		<li>environment clean-up added, configure no longer stumbles upon stray environment variables</li>
		<li>Time::HiRes specific hints to allow successful builds</li>
		<li>removed module tests for miniperl</li>
	</ul></li>

	<li>0.4.1 (2011-04-25)<ul>
		<li>make rules for xsubpp changed</li>
		<li>fixed static modules handling</li>
	</ul></li>

	<li>0.4 (2011-03-11)<ul>
		<li>perl-5.12 support</li>
		<li>miniperl_top introduced</li>
		<li>make rules for all modules, make_ext is no longer used</li>
	</ul></li>

	<li>0.3 (2011-03-04)<ul>
		<li>threads support</li>
		<li>various fixes done after the demise of the old site</li>
	</ul></li>
		
	<li>0.2 (2009-12-06)<ul>
		<li>make rules for DynaLoader fixed</li>
		<li>other minor fixes to allow MIPS build</li>
	</ul></li>

	<li>0.1 (2009-01-05)<ul>
		<li>first public release</li>
	</ul></li>
</ul>

<? include "_foot.php" ?>
